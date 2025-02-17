<?php

namespace App;

# Magic Methods & How they work.

class Invoice
{
    private string $id;
    public function __construct()
    {
        $this->id = uniqid('invoice_');
        var_dump('__construct');
    }

    public function __clone(): void
    {
        $this->id = uniqid('invoice_');
        var_dump('clone');
    }
}