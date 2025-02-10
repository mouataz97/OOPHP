<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\implementation\CollectionAgency;

$collector = new CollectionAgency();
echo $collector->collect(100) . PHP_EOL ;