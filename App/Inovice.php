<?php

namespace App;
# Magic Methods.

class Inovice
{
    protected array $data;
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function __get(string $name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }

        return null;
    }
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }
    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->data);
    }
    public function __unset(string $name): void
    {
        unset($this->data[$name]);
    }
}