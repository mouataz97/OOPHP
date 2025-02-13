<?php

namespace App\CoffeeShop;

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}