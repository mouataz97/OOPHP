<?php
namespace App\Implementation;
class PaymentCollector implements Collector, AnotherInterface
{
    public const MY_CONATANT = 1;
    public function foo()
    {
        // TODO: Implement foo() method.
    }

    public function __construct() {
        // Constructor implementation
    }

    public function collect(float $owedAmount): float
    {
        // TODO : Implement collect() method.
    }
}

?>
