<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;

# Object cloning & Magic Methods

$invoice1 = new Invoice();

$invoice2 = clone $invoice1;

var_dump($invoice1, $invoice2, $invoice1===$invoice2);

