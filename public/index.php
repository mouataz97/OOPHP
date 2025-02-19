<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
use App\Customer;

# Exceptions: Try-Catch || OOP Error Handling

set_exception_handler(function(\Exception $e){
    var_dump($e->getMessage());
});

try{
    array_rand([],1);
}catch (\ValueError $e){
    echo $e->getMessage() . PHP_EOL;
}

$invoice = new Invoice(new Customer());

$invoice->process(25);