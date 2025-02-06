<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;
use App\Enums\Status;

class Transaction
{

//    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('invalid status');
        }
        $this->status = $status;

        return $this;
    }

    // Add a getter method for the status
//    public function getStatus(): string
//    {
//        return $this->status;
//    }
}
