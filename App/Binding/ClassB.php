<?php

namespace App\Binding;

class ClassB extends ClassA
{
    protected static string $name = 'B';
    public static function getName(): string
    {
        return static::$name; // TODO: Change the autogenerated stub
    }
}