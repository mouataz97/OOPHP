<?php

namespace App;

# Magic Methods & How they work.

class Invoice
{
    public function __construct(public float $amount, public string $description)
    {
    }
}