<?php

namespace App;
use App\Exception;
use http\Exception\InvalidArgumentException;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        if($amount <= 0) {
            throw new InvalidArgumentException(' Invalid invoice amount');
        }
        if(empty($this->customer->getbillingInfo())){
            throw new Exception\MissingBillingInfoException();
        }
        echo 'Processing $' . $amount . ' invoice -';
        sleep(1);
        echo 'OK'. PHP_EOL;
    }
}