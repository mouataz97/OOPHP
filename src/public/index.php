<?php

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';


$transacton = new Transaction(4, 'test');

echo $transacton->getCustomer()?->getPaymentProfile()?->id ?? 'foo';