<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Toaster;
use App\ToasterPro;

//    $transaction = new Transaction(5);
//    $transaction->setAmount(123.4);
//    $transaction->process();

    $newToast = new ToasterPro();
    $newToast->addSlice('Bread1');
    $newToast->addSlice('Bread2');
    $newToast->addSlice('Bread3');

    $newToast->toastBagel();

?>
