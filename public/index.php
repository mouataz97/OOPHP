<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Router;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Exception\RouteNotFoundException;

var_dump(class_exists('App\Controllers\Router')); // Should return true
var_dump(class_exists('App\Controllers\HomeController')); // Should return true
var_dump(class_exists('App\Controllers\InvoiceController')); // Should return true

session_start();

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->post('/upload', [HomeController::class, 'upload'])
    ->get('/invoices', [InvoiceController::class, 'index'])
    ->get('/invoices/create', [InvoiceController::class, 'create'])
    ->post('/invoices/create', [InvoiceController::class, 'store']);

try {
    echo $router->resolve(
        $_SERVER['REQUEST_URI'],
        strtolower($_SERVER['REQUEST_METHOD'])
    );
} catch (RouteNotFoundException $e) {
    http_response_code(404);
    echo $e->getMessage();
}

ini_set('display_errors', 'On');
ini_set('log_errors', 'On');
error_reporting(E_ALL);