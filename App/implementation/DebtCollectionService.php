<?php

namespace App\implementation;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector)
    {
        var_dump($collector instanceof Rocky);
        $owedAmount = mt_rand(100,1000);
        $collectedAmount = $collector->collect($owedAmount);
        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}