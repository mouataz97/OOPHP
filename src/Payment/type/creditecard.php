<?php

declare(strict_types= 1);

namespace \pay\type;

class Creditecard{
    public function debite(float $amount, float $total){
        if($amount < $total) return false;
        $total -= $amount;
        return $amount;
    }

    public function credite(float $amount,float $total){
        $total += $amount;
        return 'succeded';
    }
}