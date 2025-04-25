<?php

namespace App\Controllers;

class InvoiceController
{
    public function index(): string
    {
        setcookie('userName', 'Mouataz', time() + 3600);
        return 'Invoice';
    }

    public function create(): string
    {
        return <<<FORM
<form action="/invoices/create" method="post">
    <label>Amount</label>
    <input type="text" name="amount">
    <button type="submit">Create</button>
</form>
FORM;
    }

    public function store()
    {
        $amount = $_POST['amount'] ?? null;
        echo 'Amount: ' . htmlspecialchars($amount);
    }
}
