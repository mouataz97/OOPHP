<?php

namespace App\CoffeeShop;

class CappuccinoMaker extends CoffeeMaker
{
    public function cappuccinoMaker()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}