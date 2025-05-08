<?php

declare(strict_types=1);

namespace App\Controllers;

class InvoiceController
{
    public function index(): string
    {
        return 'Invoice list';
    }

    public function create(): string
    {
        return 'Create invoice form';
    }

    public function store(): string
    {
        return 'Store invoice';
    }
}
