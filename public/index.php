<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
# Sessions & Cookies - Output Buffering

$router = new \App\Classes\Router();
session_start();
$router
    ->get('/', [App\Classes\Home::class, 'index'])
    ->get('/invoices', [App\Classes\Invoice::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoice::class, 'store']);


$requestURI = $_SERVER['REQUEST_URI'] ?? '/'; // Default to '/' if not available
$requestMethod = strtolower($_SERVER['REQUEST_METHOD'] ?? 'get'); // Default to 'get'

echo $router->resolve($requestURI, $requestMethod);

var_dump($_COOKIE);
