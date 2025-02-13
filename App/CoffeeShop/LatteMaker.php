<?php

namespace App\CoffeeShop;

class LatteMaker extends CoffeeMaker
{
    public function makingLatte()
    {
        echo static::class . ' Making latte' . PHP_EOL;
    }
}