<?php

declare(strict_types=1);

//define(__DIR__, '../');

require_once '../App/Payment/Paddle/Transaction.php';
require_once '../App/Payment/Paddle/Customer.php';
require_once '../App/Notification/Email.php';
require_once '../App/Payment/Paddle/DateTime.php';

use App\Payment\Paddle\Transaction;

$paddleTransaction = new Transaction();
var_dump($paddleTransaction);