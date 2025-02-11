<?php

namespace App;
# Magic Methods & How they work.

class Inovice
{

    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }
    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }

    /*
    protected array $data;
//    public function __construct(float $amount) // index cant work when i uncomment this method by calling in 2 lines
//    {
//        $this->amount = $amount;
//    }

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
    */
}