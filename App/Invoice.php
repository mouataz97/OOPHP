<?php

namespace App;
use Exception;
class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        if($amount <= 0) {
            throw new \MissingBillingInfoException(' Invalid invoice amount');
        }
        echo 'Processing $' . $amount . ' invoice -';
        sleep(1);
        echo 'OK'. PHP_EOL;
    }
}