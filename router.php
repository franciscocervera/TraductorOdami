<?php
declare(strict_types=1);

// Proteger archivos privados al utilizar el servidor de desarrollo de PHP.
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (preg_match('~(^|/)\.~', $path) === 1 || preg_match('~^/(vendor|tests)(/|$)~i', $path) === 1) {
    http_response_code(404);
    exit;
}

return false;
