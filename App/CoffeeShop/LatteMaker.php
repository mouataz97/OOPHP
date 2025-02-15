<?php

namespace App\CoffeeShop;

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;

    public function makeLatte()
    {
        echo 'Making-latte';
    }
}