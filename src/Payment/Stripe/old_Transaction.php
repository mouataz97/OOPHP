<?php

declare(strict_types=1);
class Transaction
{
<<<<<<< HEAD:src/Transaction.php
    //private float $amount;
    private ?Customer $customer = null;
=======
    /*
    private float $amount;
>>>>>>> refs/remotes/origin/main:src/Payment/Stripe/old_Transaction.php

    
    // constructor
    public function __construct
    (
        public float $amount,
        private ?string $description = null
    ){
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
/*
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
<<<<<<< HEAD:src/Transaction.php
*/
}
=======

    */
}
>>>>>>> refs/remotes/origin/main:src/Payment/Stripe/old_Transaction.php
