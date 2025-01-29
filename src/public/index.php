<?php

declare(strict_types=1);
require_once '../Transaction.php';
require_once 'Customer.php';
require_once 'PaymentProfile.php';

# Classes & Objects

echo $myTransaction1?->Cosumer->PaymentProfile->id;

$myTransaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(10)
    ->applyDiscount(10);

$myTransaction2 = (new Transaction(200, 'Transaction 2'))
    ->addTax(10)
    ->applyDiscount(15);

var_dump($myTransaction1->getAmount(), $myTransaction2->getAmount());