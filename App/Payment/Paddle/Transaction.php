<?php

declare(strict_types= 1);
namespace App\Payment\Paddle;
//use App\Enums\Status;

class Transaction
{
    static public int $count = 0;
    public function __construct(
        public float $amount,
        public string $description
    ){
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }

    public function process(){
        echo 'Processing paddle transaction...';
    }

//    private string $status;

//    public function setStatus(string $status): self
//    {
//        if(! isset(Status::ALL_STATUSES[$status])) {
//            throw new \InvalidArgumentException('invalid status');
//        }
//        $this->status = $status;
//
//        return $this;
//    }
//
//    // Add a getter method for the status
//
////    public function getStatus(): string
////    {
////        return $this->status;
////    }
//    public function __construct()
//    {
//        $this->setStatus(Status::PENDING);
//    }
}
