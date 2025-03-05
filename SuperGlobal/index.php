<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router
    ->get('/', [Home::class, 'index'])
    ->get('/Invoices', [Invoice::class, 'index'])
    ->get('/Invoices/create', [Invoice::class, 'create'])
    ->post('/Invoices/create', [Invoice::class, 'create']);

try {
    // Resolving the route based on the current request URI
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}
