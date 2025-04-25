<?php

require_once __DIR__ . '/../vendor/autoload.php';  // Composer autoload

session_start();  // Start the session

$router = new App/Router();
$router
    ->get('/', [App\Classes\HomeController::class, 'index'])
    ->post('/upload', [App\Classes\Home::class, 'upload'])
    ->get('/invoices', [App\Classes\Invoice::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoice::class, 'create']);

echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);