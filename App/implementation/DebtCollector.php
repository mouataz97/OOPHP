<?php

namespace App\implementation;
interface DebtCollector
{
    public function collect(float $owedAmount): float;
}