<?php

namespace App;

class Radio extends Boolean
{
    public function render()
    {
        return <<<HTML
<input type="radio" name="$this->name"/>
HTML;

    }
}