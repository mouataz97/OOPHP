<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\MyInterface;

# Anonymous classes

$obj = new class(1, 2, 3) implements MyInterface
{
    public function __construct(public int $x, public int $y, public int $z)
    {
    }
};

foo($obj);

function foo(MyInterface $obj)
{
    var_dump($obj);
}