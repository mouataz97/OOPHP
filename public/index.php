<?php

declare(strict_types=1);

//echo __DIR__ . '/../' . PHP_EOL;

spl_autoload_register(function ($class){
//    var_dump($class);
//    die();
   $PATH = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($PATH))
    require_once $PATH;
});

use App\Payment\Paddle\Transaction;

$paddleTransaction = new Transaction();
var_dump($paddleTransaction);