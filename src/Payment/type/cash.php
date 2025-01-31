<?php
declare(strict_types= 1);
namespace \pay\type;

class Cash{
    public function myCash(float $amount, string $devis){
        return $amount . $devis ;
    }
} 

