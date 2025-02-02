<?php

require_once '../PaymentGateWay/paddle/Tansaction.php';
require_once '../PaymentGateWay/Stripe/Transaction.php';
require_once '../Customer.php';

use PaymentGateWay\Paddle\Transaction;

var_dump(new Transaction());