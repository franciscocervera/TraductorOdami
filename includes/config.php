<?php
declare(strict_types=1);

// Cargar autoload de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Inicializar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}