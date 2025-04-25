<?php

namespace App\CoffeeShop;

trait CappuccinoTrait
{
    private function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}