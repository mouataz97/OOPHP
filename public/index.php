<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

session_start();
define('STORAGE_PATH', __DIR__ . '/../storage');
# Get & Post Superglobals

use App\Classes\Home;
use App\Classes\Invoice;

$router = new \App\Classes\Router();
session_start();
$router
    ->get('/', [Home::class, 'index'])
    ->post('/Upload', [Home::class, 'Upload'])
    ->get('/invoices', [Invoice::class, 'index'])
    ->get('/invoices/create', [Invoice::class, 'create'])
    ->post('/invoices/create', [Invoice::class, 'store']);

echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);