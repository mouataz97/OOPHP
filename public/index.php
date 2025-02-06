<?php

require __DIR__ . '/../vendor/autoload.php';


//use App\Payment\Paddle\Transaction;

//$paddleTransaction = new Transaction();
//var_dump($paddleTransaction);

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();
