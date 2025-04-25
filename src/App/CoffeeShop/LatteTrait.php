<?php

namespace App\CoffeeShop;

trait LatteTrait
{
    private string $milkType = 'whole-milk';

    final function makeLatte()
    {
        echo static::class . ' Making latte ' . $this->milkType . PHP_EOL;
    }

    public function setMilkeType(string $milkeType): static
    {
        $this->milkType = $milkeType;
        return $this;
    }
}