<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\CoffeeShop\CoffeeMaker;
use App\CoffeeShop\LatteMaker;
use App\CoffeeShop\AllInOneCoffeeMaker;
use App\CoffeeShop\CappuccinoMaker;

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makingLatte();

$coffeeMaker = new CappuccinoMaker();
$coffeeMaker->makeCoffee();
$coffeeMaker->cappuccinoMaker();