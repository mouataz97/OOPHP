<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;


use App\Customer;



class Transaction
{
    private $customer;
    private $amount;
    /**
     *  description
     *
     * @program Customer $custumer
     * @program float $amount
     *
     * @throw \RuntimeException
     * @throw \InvalidArgumentException
     *
     * @return bool
     */
    public function process(Customer $customer, float $amount): bool
    {
        // process transaction

        // if failed, return true

        // otherwise return true
        return true;
    }
}
