<?php

declare(strict_types= 1);

class Transaction
{
    private float $amount = 1;

    public function __construct(
        float $amount,
        private ?string $description
        ){
            $this->amount = $amount;
        }
}