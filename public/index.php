<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
use \App\CustomInvoice;
# Variable Storage & Object Comparison

$invoice1 = new Invoice(24, 'My invoice');
$invoice2 = new CustomInvoice(24, 'My invoice');

echo 'Invoice 1 == invoice 2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'Invoice 1 === invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice2);

var_dump($invoice1, $invoice2);