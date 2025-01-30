<?php

declare(strict_types=1);
class Transaction
{
    /*
    private float $amount;

    
    // constructor
    public function __construct
    (
        float $amount,
        private ?string $description = null
    ){
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100; // $this->amount = $this->amount + $amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo "Transaction {$this->description} has been processed.\n";
    }

    */
}