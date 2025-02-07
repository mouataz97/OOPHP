<?php

require __DIR__ . '/../vendor/autoload.php';
use App\DB;
use App\Payment\Paddle\Transaction;
//use App\Enums\Status;

$transaction = new Transaction(5,'tony alba');
//$db = new DB([]);
$transaction->process();
//var_dump($transaction->getCount());

//$transaction->setStatus(Status::PAID);

//var_dump(Transaction::getCount()); // You can inspect the entire object with var_dump

//echo $transaction->getStatus(); // This will print 'paid'

//$db = DB::getInstance([]);
?>
