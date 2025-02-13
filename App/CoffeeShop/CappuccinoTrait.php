<?php

namespace App\CoffeeShop;

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
    public function makeLatte()
    {
        echo ' is making Latte from CappuccinoTrait ' . PHP_EOL;
    }
}