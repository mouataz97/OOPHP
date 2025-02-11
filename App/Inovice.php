<?php

namespace App;
# Magic Methods & How they work.

class Inovice
{
    public function process(float $amount, $discription)
    {
        var_dump($amount, $discription);
    }

    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name)){
            call_user_func_array([$this, $name], $arguments,);
        }
    }
//    public static function __callStatic(string $name, array $arguments)
//    {
//        var_dump('static', $name, $arguments);
//    }
//
//
//    public function __construct(public float $amount = 0,public array $data = []) // index cant work when i uncomment this method by calling in 2 lines
//    {
//    }
//
//    public function __get(string $name)
//    {
//        if(array_key_exists($name, $this->data)){
//            return $this->data[$name];
//        }
//        return null;
//    }
//    public function __set(string $name, $value): void
//    {
//        $this->data[$name] = $value;
//    }

//    public function __isset(string $name): bool
//    {
//        return array_key_exists($name, $this->data);
//    }
//    public function __unset(string $name): void
//    {
//        unset($this->data[$name]);
//    }
//    */
}