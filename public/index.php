<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\App;
use App\Router;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\View;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('storage_path', __DIR__ . '/../storage');
define('views_path', __DIR__ . '/../views');
$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/download', [HomeController::class, 'download'])
    ->post('/upload', [HomeController::class, 'upload'])
    ->get('/invoices', [InvoiceController::class, 'index'])
    ->get('/invoices/create', [InvoiceController::class, 'create'])
    ->post('/invoices/create', [InvoiceController::class, 'store']);

(new App(
    $router,
    [
        'uri' => $_SERVER['REQUEST_URI'] ?? '/',
        'method' => $_SERVER['REQUEST_METHOD'] ?? 'GET',
    ]
))->run();