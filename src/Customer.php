<?php

class Customer
{
    public $id;
    private ?PaymentProfile $paymentProfile = null;
    
    public function getPaymentProfile(): ?PaymentProfile
    {
        $this->id = rand();
        return $this->paymentProfile;
    }
}