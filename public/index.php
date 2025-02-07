<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Payment\Paddle\Transaction;

    $transaction = new Transaction(5);
    $transaction->process();
?>
