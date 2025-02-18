<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
use App\Customer;

# Exceptions: Try-Catch || OOP Error Handling

$invoice = new Invoice(new Customer());
try{
    $invoice->process(25);
} catch (\App\Exception\MissingBillingInfoException $e){
    echo $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile();
}
