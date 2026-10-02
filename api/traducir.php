<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../includes/config.php';

function jsonResponse(array $data, int $status = 200): void
{
    http_response_code($status);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

function normalizeText(string $text): string
{
    $text = trim(mb_strtolower($text, 'UTF-8'));
    $text = preg_replace('/\s+/u', ' ', $text) ?? $text;
    $text = preg_replace('/[^\p{L}\p{N}\s]/u', '', $text) ?? $text;

    if (class_exists('Normalizer')) {
        $normalized = \Normalizer::normalize($text, \Normalizer::FORM_D);
        if ($normalized !== false) {
            $text = preg_replace('/\p{Mn}+/u', '', $normalized) ?? $normalized;
        }
    }

    return trim($text);
}

function preserveCase(string $original, string $translated): string
{
    $original = trim($original);
    $translated = trim($translated);

    if ($original === '' || $translated === '') {
        return $translated;
    }

    // TODO MAYÚSCULAS
    if (mb_strtoupper($original, 'UTF-8') === $original) {
        return mb_strtoupper($translated, 'UTF-8');
    }

    // Primera letra mayúscula
    $firstOriginal = mb_substr($original, 0, 1, 'UTF-8');
    $restOriginal = mb_substr($original, 1, null, 'UTF-8');

    if (
        mb_strtoupper($firstOriginal, 'UTF-8') === $firstOriginal &&
        mb_strtolower($restOriginal, 'UTF-8') === $restOriginal
    ) {
        $firstTranslated = mb_substr($translated, 0, 1, 'UTF-8');
        $restTranslated = mb_substr($translated, 1, null, 'UTF-8');

        return mb_strtoupper($firstTranslated, 'UTF-8') . $restTranslated;
    }

    return $translated;
}

function loadCorpus(string $csvPath): array
{
    static $cache = [];

    if (isset($cache[$csvPath])) {
        return $cache[$csvPath];
    }

    if (!is_readable($csvPath)) {
        return $cache[$csvPath] = [];
    }

    $rows = [];
    $handle = fopen($csvPath, 'r');

    if ($handle === false) {
        return $cache[$csvPath] = [];
    }

    $headers = fgetcsv($handle);
    if ($headers === false) {
        fclose($handle);
        return $cache[$csvPath] = [];
    }

    $headers[0] = preg_replace('/^\xEF\xBB\xBF/', '', (string) $headers[0]);

    while (($data = fgetcsv($handle)) !== false) {
        if (count($data) !== count($headers)) {
            continue;
        }

        $row = array_combine($headers, $data);
        if (!is_array($row)) {
            continue;
        }

        $es = trim((string) ($row['Frase_Español'] ?? ''));
        $odami = trim((string) ($row['Traduccion_Ódami'] ?? ''));

        if ($es === '' || $odami === '') {
            continue;
        }

        $rows[] = [
            'es' => $es,
            'odami' => $odami,
            'es_norm' => normalizeText($es),
            'odami_norm' => normalizeText($odami),
        ];
    }

    fclose($handle);

    return $cache[$csvPath] = $rows;
}

function similarityScore(string $a, string $b): float
{
    if ($a === '' || $b === '') {
        return 0.0;
    }

    similar_text($a, $b, $percent);
    $score = $percent / 100;

    if (str_contains($a, $b) || str_contains($b, $a)) {
        $score += 0.05;
    }

    return min($score, 1.0);
}

function findInCorpus(string $text, string $direction, array $corpus): ?array
{
    $inputNorm = normalizeText($text);

    if ($inputNorm === '') {
        return null;
    }

    $sourceKey = $direction === 'es-odami' ? 'es' : 'odami';
    $sourceNormKey = $direction === 'es-odami' ? 'es_norm' : 'odami_norm';
    $targetKey = $direction === 'es-odami' ? 'odami' : 'es';

    // Exacta simple
    foreach ($corpus as $row) {
        if (trim(mb_strtolower($row[$sourceKey], 'UTF-8')) === trim(mb_strtolower($text, 'UTF-8'))) {
            return [
                'translation' => preserveCase($text, $row[$targetKey]),
                'source' => 'csv_exact',
                'matched_text' => $row[$sourceKey],
                'score' => 1.0,
            ];
        }
    }

    // Exacta normalizada
    foreach ($corpus as $row) {
        if ($row[$sourceNormKey] === $inputNorm) {
            return [
                'translation' => preserveCase($text, $row[$targetKey]),
                'source' => 'csv_normalized',
                'matched_text' => $row[$sourceKey],
                'score' => 0.99,
            ];
        }
    }

    // Aproximada
    $bestRow = null;
    $bestScore = 0.0;

    foreach ($corpus as $row) {
        $candidate = $row[$sourceNormKey];
        $score = similarityScore($inputNorm, $candidate);

        if ($score > $bestScore) {
            $bestScore = $score;
            $bestRow = $row;
        }
    }

    if ($bestRow !== null && $bestScore >= 0.88) {
        return [
            'translation' => preserveCase($text, $bestRow[$targetKey]),
            'source' => 'csv_fuzzy',
            'matched_text' => $bestRow[$sourceKey],
            'score' => round($bestScore, 3),
        ];
    }

    return null;
}

function getTopCorpusMatches(string $text, string $direction, array $corpus, int $limit = 5): array
{
    $inputNorm = normalizeText($text);

    if ($inputNorm === '') {
        return [];
    }

    $sourceKey = $direction === 'es-odami' ? 'es' : 'odami';
    $sourceNormKey = $direction === 'es-odami' ? 'es_norm' : 'odami_norm';
    $targetKey = $direction === 'es-odami' ? 'odami' : 'es';

    $matches = [];

    foreach ($corpus as $row) {
        $score = similarityScore($inputNorm, $row[$sourceNormKey]);

        if ($score >= 0.45) {
            $matches[] = [
                'source_text' => $row[$sourceKey],
                'target_text' => $row[$targetKey],
                'score' => round($score, 3),
            ];
        }
    }

    usort($matches, static function (array $a, array $b): int {
        return $b['score'] <=> $a['score'];
    });

    return array_slice($matches, 0, $limit);
}

function buildSystemPrompt(string $direction, array $examples): string
{
    $basePrompt = $direction === 'es-odami'
        ? 'Traduce del español al ódami del norte.'
        : 'Traduce del ódami del norte al español.';

    $rules = ' Usa las traducciones de referencia proporcionadas abajo como prioridad terminológica y estilística. '
        . 'Si alguna referencia es claramente similar al texto de entrada, conserva esa forma. '
        . 'Responde solo con la traducción final, sin explicaciones adicionales.';

    if ($examples === []) {
        return $basePrompt . $rules;
    }

    $referenceLines = [];
    foreach ($examples as $example) {
        $referenceLines[] = '- ' . $example['source_text'] . ' => ' . $example['target_text'];
    }

    return $basePrompt
        . $rules
        . "\n\nTraducciones de referencia del corpus:\n"
        . implode("\n", $referenceLines);
}

function callTranslationApi(string $text, string $direction, array $examples, string $apiKey): array
{
    $systemPrompt = buildSystemPrompt($direction, $examples);

    $payload = [
        'model' => 'gpt-5.4-nano',
        'messages' => [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $text],
        ],
        'temperature' => 0.1,
    ];

    $ch = curl_init('https://api.openai.com/v1/chat/completions');

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey,
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
        CURLOPT_TIMEOUT => 45,
    ]);

    $result = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    if ($result === false) {
        error_log('OpenAI cURL error: ' . $curlError);
        return [
            'ok' => false,
            'message' => 'No se pudo establecer conexión con el servicio de traducción.'
        ];
    }

    $response = json_decode($result, true);
    $translation = $response['choices'][0]['message']['content'] ?? null;

    if ($statusCode >= 400) {
        $apiMessage = $response['error']['message'] ?? 'Error desconocido del servicio.';
        error_log('OpenAI API error [' . $statusCode . ']: ' . $apiMessage);

        return [
            'ok' => false,
            'message' => 'El servicio de traducción no pudo procesar la solicitud en este momento.'
        ];
    }

    if (!is_string($translation) || trim($translation) === '') {
        error_log('OpenAI invalid response: ' . $result);

        return [
            'ok' => false,
            'message' => 'La respuesta del servicio no fue válida.'
        ];
    }

    return [
        'ok' => true,
        'translation' => trim($translation),
        'examples_used' => $examples,
    ];
}

// Dividir el texto en piezas, conservando separadores.
function splitTextPreservingDelimiters(string $text): array
{
    $parts = preg_split('/(\s*[,;:.!?¿¡]+\s*)/u', $text, -1, PREG_SPLIT_DELIM_CAPTURE);

    if ($parts === false || $parts === []) {
        return [$text];
    }

    $tokens = [];
    foreach ($parts as $part) {
        if ($part === '') {
            continue;
        }
        $tokens[] = $part;
    }

    return $tokens;
}

function isDelimiterToken(string $token): bool
{
    return preg_match('/^\s*[,;:.!?¿¡]+\s*$/u', $token) === 1;
}

function translateSegment(
    string $segment,
    string $direction,
    array $corpus,
    ?string $apiKey
): array {
    $trimmed = trim($segment);

    if ($trimmed === '') {
        return [
            'translation' => $segment,
            'source' => 'empty',
        ];
    }

    $localMatch = findInCorpus($trimmed, $direction, $corpus);
    if ($localMatch !== null) {
        // Respetar espacios originales alrededor
        $leading = '';
        $trailing = '';

        if (preg_match('/^\s+/u', $segment, $m) === 1) {
            $leading = $m[0];
        }
        if (preg_match('/\s+$/u', $segment, $m) === 1) {
            $trailing = $m[0];
        }

        return [
            'translation' => $leading . $localMatch['translation'] . $trailing,
            'source' => $localMatch['source'],
            'matched_text' => $localMatch['matched_text'] ?? null,
            'score' => $localMatch['score'] ?? null,
        ];
    }

    if (!$apiKey) {
        return [
            'translation' => $segment,
            'source' => 'untranslated_no_api',
        ];
    }

    $examples = getTopCorpusMatches($trimmed, $direction, $corpus, 5);
    $apiResult = callTranslationApi($trimmed, $direction, $examples, $apiKey);

    if (!$apiResult['ok']) {
        return [
            'translation' => $segment,
            'source' => 'api_failed',
        ];
    }

    $translated = preserveCase($trimmed, $apiResult['translation']);

    $leading = '';
    $trailing = '';

    if (preg_match('/^\s+/u', $segment, $m) === 1) {
        $leading = $m[0];
    }
    if (preg_match('/\s+$/u', $segment, $m) === 1) {
        $trailing = $m[0];
    }

    return [
        'translation' => $leading . $translated . $trailing,
        'source' => 'api_segment',
        'examples_used' => $apiResult['examples_used'] ?? [],
    ];
}

function translateBySegments(
    string $text,
    string $direction,
    array $corpus,
    ?string $apiKey
): array {
    $tokens = splitTextPreservingDelimiters($text);

    $translatedParts = [];
    $segmentDetails = [];

    foreach ($tokens as $token) {
        if (isDelimiterToken($token)) {
            $translatedParts[] = $token;
            continue;
        }

        $result = translateSegment($token, $direction, $corpus, $apiKey);
        $translatedParts[] = $result['translation'];

        $segmentDetails[] = [
            'input' => $token,
            'output' => $result['translation'],
            'source' => $result['source'] ?? null,
            'matched_text' => $result['matched_text'] ?? null,
            'score' => $result['score'] ?? null,
        ];
    }

    return [
        'translation' => implode('', $translatedParts),
        'source' => 'segmented',
        'segments' => $segmentDetails,
    ];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['translation' => 'Método no permitido.'], 405);
}

$rawBody = file_get_contents('php://input');
$input = json_decode($rawBody ?: '{}', true);

if (!is_array($input)) {
    jsonResponse(['translation' => 'El cuerpo de la solicitud no es JSON válido.'], 400);
}

$text = trim((string) ($input['text'] ?? ''));
$direction = (string) ($input['direction'] ?? 'es-odami');

if ($text === '') {
    jsonResponse(['translation' => 'Texto vacío.'], 400);
}

$allowedDirections = ['es-odami', 'odami-es'];
if (!in_array($direction, $allowedDirections, true)) {
    jsonResponse(['translation' => 'Dirección de traducción no válida.'], 400);
}

$csvPath = __DIR__ . '/odami_corpus.csv';
$corpus = loadCorpus($csvPath);

$apiKey = $_ENV['OPENAI_API_KEY'] ?? getenv('OPENAI_API_KEY') ?: null;

// 1) Intentar frase completa primero
$fullMatch = findInCorpus($text, $direction, $corpus);
if ($fullMatch !== null) {
    jsonResponse([
        'translation' => $fullMatch['translation'],
        'source' => $fullMatch['source'],
        'matched_text' => $fullMatch['matched_text'],
        'score' => $fullMatch['score'],
    ]);
}

// 2) Intentar por segmentos
$segmentedResult = translateBySegments($text, $direction, $corpus, $apiKey);

// Si hubo al menos una mejora real, devolver segmentado
if (trim($segmentedResult['translation']) !== '') {
    jsonResponse([
        'translation' => $segmentedResult['translation'],
        'source' => $segmentedResult['source'],
        'segments' => $segmentedResult['segments'],
    ]);
}

// 3) Fallback total, por si acaso
if (!$apiKey) {
    jsonResponse([
        'translation' => 'Falta configurar API en el entorno del servidor.'
    ], 500);
}

$examples = getTopCorpusMatches($text, $direction, $corpus, 5);
$apiResult = callTranslationApi($text, $direction, $examples, $apiKey);

if (!$apiResult['ok']) {
    jsonResponse([
        'translation' => $apiResult['message']
    ], 502);
}

jsonResponse([
    'translation' => preserveCase($text, $apiResult['translation']),
    'source' => 'api_full',
    'examples_used' => array_map(
        static fn(array $e): array => [
            'source_text' => $e['source_text'],
            'target_text' => $e['target_text'],
            'score' => $e['score'],
        ],
        $apiResult['examples_used'] ?? []
    ),
]);