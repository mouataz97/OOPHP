<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', [Home::class, 'index'])
        ->register('/Invoices', [Invoice::class, 'index'])
        ->register('/Invoices/create', [Invoice::class, 'create']);

$router->register(
    '/invoices',
    function (){
        echo 'Invoices';
    }
);

echo $router->resolve($_SERVER['REQUEST_URI']);