<?php

namespace App\CoffeeShop;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' Making latte' . PHP_EOL;
    }
}