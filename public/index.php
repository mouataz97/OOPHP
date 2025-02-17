<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;

# Object & Serialize Magic Methods

$invoice = new Invoice();
echo serialize(true). PHP_EOL;
echo serialize(1). PHP_EOL;
echo serialize(2.5). PHP_EOL;
echo serialize('hello'). PHP_EOL;
echo serialize([1,2]). PHP_EOL;
echo serialize(['a'=>1,'b'=>2]). PHP_EOL;