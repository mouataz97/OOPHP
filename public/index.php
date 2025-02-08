<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Toster;

//    $transaction = new Transaction(5);
//    $transaction->setAmount(123.4);
//    $transaction->process();

    $newToast = new Toster();
    $newToast->addSlice('Bread');
    $newToast->addSlice('Bread');
    $newToast->addSlice('Bread');

    $newToast->toast();

?>
