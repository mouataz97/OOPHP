<?php

namespace App\CoffeeShop;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    use LatteTrait;
}