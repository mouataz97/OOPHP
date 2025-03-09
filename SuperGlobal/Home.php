<?php
declare(strict_types=1);
class Home
{
    public function index(): string
    {
        return 'Invoices';
    }
    public function create(): string
    {
        return '<form method="post"><label>Amount</label><input type="text" name="Amount"></form>';
    }

    public function store()
    {
        $amount = $_POST['amount'];
        var_dump($amount);
    }
}
