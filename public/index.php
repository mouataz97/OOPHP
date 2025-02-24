<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Exception\RouteNotFoundException;

$router = new App\Router();

$router
    ->register('/', [App\Classes\Home::class, 'index'])
    ->register('/invoices', [App\Classes\Invoice::class, 'index'])
    ->register('/invoices/create', [App\Classes\Invoice::class, 'create']);

// Check if REQUEST_URI exists to avoid error in CLI or other non-web contexts
$requestURI = $_SERVER['REQUEST_URI'] ?? '/';  // Default to '/' if REQUEST_URI is not set

try {
    echo $router->resolve($requestURI);
} catch (RouteNotFoundException $e) {
    // Handle 404 errors here
    echo $e->getMessage(); // You can also redirect to a custom 404 page
}
?>
