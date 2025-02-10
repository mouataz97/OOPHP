<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\implementation\DebtCollectionService;
use App\implementation\Rocky;

$Service = new DebtCollectionService();
echo $Service->collectDebt(new Rocky()) . PHP_EOL ;