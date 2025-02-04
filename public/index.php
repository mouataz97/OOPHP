<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Payment\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();
var_dump($paddleTransaction);