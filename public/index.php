<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
# Get & Post Superglobals
use App\Classes\Home;
use App\Classes\Invoice;
use App\Classes\Router;


$router = new \App\Classes\Router();

$router
    ->get('/', [Home::class, 'index'])
    ->get('/invoices', [Invoice::class, 'index'])
    ->get('/invoices/create', [Invoice::class, 'create'])
    ->post('/invoices/create', [Invoice::class, 'store']);


echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
