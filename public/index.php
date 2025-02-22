<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// Superglobals - Basic Routing Using The Server Info 

echo '<pre>';
print_r($_SERVER);
echo '<pre>';

$router = new App\Router();

$router->register(
    '/',
    function (){
        echo 'Home';
    }
);

$router->register(
    '/invoice',
    function () {
    echo 'Invoices';
    }
);

echo $router->resolve($_SERVER['REQUEST_URL']);