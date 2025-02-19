<?php

namespace App;
use App\Exception;
use App\Exception\InvoiceException;
use http\Exception\InvalidArgumentException;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        if($amount <= 0) {
            throw InvoiceException::invalidAmount();
        }
        if(empty($this->customer->getbillingInfo())){
            throw InvoiceException::missingBillingInfo();
        }
        echo 'Processing $' . $amount . ' invoice -';
        sleep(1);
        echo 'OK'. PHP_EOL;
    }
}