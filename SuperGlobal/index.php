<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', [Home::class, 'index'])
    ->register('/Invoices', [Invoice::class, 'index'])
    ->register('/Invoices/create', [Invoice::class, 'create'])
    ->register('/invoices', function () {
        echo 'Invoices';
    });

try {
    // Resolving the route based on the current request URI
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}
