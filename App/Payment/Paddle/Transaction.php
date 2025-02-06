<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;

class Transaction
{
    private const string STATUS_PAID = 'paid';
    public const string STATUS_PENDING = 'pending';
    public const string STATUS_DECLINED = 'declined';
    public function __construct()
    {
        var_dump(self::STATUS_PAID);
    }
}

