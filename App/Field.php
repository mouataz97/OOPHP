<?php

namespace App;

abstract class Field //abstract methods or classes requiere to be public not private/protected
{
    public function __construct(protected string $name)
    {

    }
    abstract public function render();
}