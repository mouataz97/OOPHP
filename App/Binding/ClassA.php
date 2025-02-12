<?php

namespace App\Binding;

class ClassA
{
    protected static string $name = 'A';
    public static function getName(): string
    {
        return self::$name;
    }
    public static function make(): static
    {
        return new static();
    }
}