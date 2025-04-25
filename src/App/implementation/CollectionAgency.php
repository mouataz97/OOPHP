<?php

namespace App\implementation;

class CollectionAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guarenteed = $owedAmount * 0.5;
        return mt_rand($guarenteed, $owedAmount);
    }
}
