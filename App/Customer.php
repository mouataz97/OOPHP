<?php
declare(strict_types=1);

namespace App;

class Customer
{
    public function __construct(private array $billingInfo = [])
    {
    }

    public function getbillingInfo(): array
    {
        return $this->billingInfo;
    }
}