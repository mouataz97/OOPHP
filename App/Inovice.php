<?php

namespace App;
# Magic Methods & How they work.

use AllowDynamicProperties;

#[AllowDynamicProperties] class Inovice implements \Stringable
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return 'Hello World!';
    }
}