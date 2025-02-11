<?php

namespace App;
# Magic Methods & How they work.

use AllowDynamicProperties;

class Inovice
{
    private string $name = 'mouataz';
    private float $age = 5;
    private string $number;
    public function __debugInfo(): ?array
    {
        return [
            'name' => $this->name,
            'age' => 'test' . substr($this->age, -1),
        ];
    }
}