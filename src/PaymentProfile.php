<?php

class PaymentProfile
{
    public $id;

    public function __construct()
    {
        $this->id = rand();  
    }
}