<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// Iterators & Iterable Type
#https://www.php.net/manual/en/reserved.interfaces.php

use App\Invoice;
use App\InvoiceCollection;

foreach (new Invoice(35) as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}

$invoiceCollection = new InvoiceCollection([new Invoice(14), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice){
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
}