<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
# Variable Storage & Object Comparison

$invoice1 = new Invoice(24, 'My invoice 1');
$invoice2 = new Invoice(24, 'My invoice 1');

$invoice3 = $invoice1; // creating a pointer in $invoice3 of $invoice1
$invoice3->amount = 123;
echo 'dump $invoice1 and $invoice3';
var_dump($invoice1, $invoice3);

echo 'Invoice 1 == invoice 3' . PHP_EOL;
var_dump($invoice1 == $invoice3);

echo 'Invoice 1 === invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice2);

