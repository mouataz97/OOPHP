<?php

namespace App\CoffeeShop;

class CoffeeMaker
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee ' . PHP_EOL;
    }
}