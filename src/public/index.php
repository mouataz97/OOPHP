<?php

declare(strict_types=1);

require_once '../Transaction.php';
require_once 'Customer.php';
require_once 'PaymentProfile.php';
require_once '../Payment/type/cash.php';
require_once '../Payment/type/creditecard.php';

# Classes & Objects
$debite = new debite(120,200);
var_dump($debite);

$cash1 = (new Cash)->cash(1500, "MAD");
var_dump($cash1);

$transaction = new Transaction(4, 'test');
echo $transaction?->getCustomer()?->getPaymentProfile()?->id ?? 'foo';

/*
$myTransaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(10)
    ->applyDiscount(10);

$myTransaction2 = (new Transaction(200, 'Transaction 2'))
    ->addTax(10)
    ->applyDiscount(15);

var_dump($myTransaction1->getAmount(), $myTransaction2->getAmount());
*/
require_once '../Payment/Stripe/old_Transaction.php';
