<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
# Variable Storage & Object Comparison

$invoice1 = new Invoice(1, 'My invoice 1');
$invoice2 = new Invoice(true, 'My invoice 1');

echo 'Invoice 1 == invoice 2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'Invoice 1 === invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice2);