<?php

namespace App;
# Magic Methods & How they work.

use AllowDynamicProperties;

class Inovice
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return 'Hello World!';
    }
    public function __invoke()
    {
        var_dump('invoked');
    }
}