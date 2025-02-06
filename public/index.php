<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Payment\Paddle\Transaction;

$transaction = new Transaction();
//echo $transaction::STATUS_PAID;
echo $transaction->setStatus('paid');
var_dump($transaction);

//echo $id->uuid4();
