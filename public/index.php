<?php

require __DIR__ . '/../vendor/autoload.php';
use App\DB;
use App\Payment\Paddle\Transaction;
//use App\Enums\Status;

$transaction = new Transaction(5,'tony alba');
//$transaction->setStatus(Status::PAID);

//var_dump(Transaction::getCount()); // You can inspect the entire object with var_dump

//echo $transaction->getStatus(); // This will print 'paid'

//$db = DB::getInstance([]);
//$db = DB::getInstance([]);
//$db = DB::getInstance([]);
//$db = DB::getInstance([]);

$db = new DB([]);

?>
