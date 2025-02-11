<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Inovice;

$inovice = new Inovice(15);

var_dump(isset($inovice->amount));
unset($inovice->amount);
var_dump($inovice->amount);