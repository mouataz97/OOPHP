<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Inovice;

$inovice = new Inovice('mouataz');
var_dump(is_callable($inovice()));
echo $inovice();