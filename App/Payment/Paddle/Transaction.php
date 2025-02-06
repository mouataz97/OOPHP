<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;

class Transaction
{
    public const string STATUS_PAID = 'paid';
    public const string STATUS_PENDING = 'pending';
    public const string STATUS_DECLINED = 'declined';
    private string $status;
    public function __construct()
    {
        $this->setStatus(self::STATUS_PAID);
    }
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}

