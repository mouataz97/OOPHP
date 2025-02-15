<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\ClassA;
use App\MyInterface;

# Anonymous classes

$obj = new ClassA(1, 2);
var_dump($obj->bar());