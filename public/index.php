<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Payment\Paddle\Transaction;

$transaction = new Transaction();
//echo $transaction::STATUS_PAID;
echo $transaction::class;

//echo $id->uuid4();
