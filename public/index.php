<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Binding\ClassA;
use App\Binding\ClassB;

$classA = new ClassA();
$classB = new ClassB();

echo $classA::getName() . PHP_EOL;
echo $classB->getName() . PHP_EOL;

var_dump($classB::make());