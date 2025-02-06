<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Payment\Paddle\Transaction;
use App\Enums\Status;

$transaction = new Transaction();
$transaction->setStatus(Status::PAID);
var_dump($transaction); // You can inspect the entire object with var_dump

//echo $transaction->getStatus(); // This will print 'paid'


?>
