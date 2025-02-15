<?php

namespace App;

class ClassA
{

    public function __construct(public int $x, public int $y)
    {
    }

    public function foo(): string
    {
        return 'foo';
    }
    public function bar(): object
    {
        return new class($this) {
            public function __construct(ClassA $myObj)
            {
                var_dump($myObj);
            }
        };
    }
}