<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload

use \App\Invoice;
use App\Customer;

# Exceptions: Try-Catch || OOP Error Handling

function foo(){
    echo 'foo' . PHP_EOL;
    return false;
}


var_dump(process());
function process()
{
    $invoice = new Invoice(new Customer(['foo','bar']));
    try{
        $invoice->process(-25);

        return true;
    } catch (\Exception $e){
        echo $e->getMessage() . PHP_EOL;

        return foo();
    } finally {
        echo "Finally block". PHP_EOL;

        return -1;
    }

}