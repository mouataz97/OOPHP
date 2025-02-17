<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;

# Object & Serialize Magic Methods

$invocie1 = new Invoice(3, 'invoice1', '12312312');

$str = serialize($invocie1);
echo $str;

$invoice2 = unserialize($str);
var_dump($invoice2);