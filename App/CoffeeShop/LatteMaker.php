<?php

namespace App\CoffeeShop;

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;
    public static function foo()
    {
        echo 'Foo Bar';
    }
}