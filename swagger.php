<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

use OpenApi\Generator;

/**
 * @OA\PathItem(path="/persons")
 */
$openapi = Generator::scan(['app/UseCases/Queries', 'app/UseCases/Handlers']);

header('Content-Type: application/json');
file_put_contents(__DIR__ . '/public/swagger.json', $openapi->toJson());
