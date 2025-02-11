<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Inovice;

$inovice = new Inovice(15);
$inovice->amount = 25;

echo $inovice->amount;