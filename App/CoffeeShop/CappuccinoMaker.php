<?php

namespace App\CoffeeShop;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait{
        CappuccinoTrait::makeCappuccino as public;
    }
}