<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;


use App\Customer;



class Transaction
{
    /** @var Customer */
    private $customer;
    /** @var float */
    private $amount;

    /**
     * @param Customer[] $arr
     * @return void
     */
    public function foo(array $arr)
    {
        foreach ($arr as $obj){
            $obj->name;
        }
    }
}
