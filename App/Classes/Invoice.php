<?php

namespace App\Classes;

class Invoice
{
public function index(): string
{
return 'Invoice';
}

public function create(): string
{
return '<form action="/Invoice/create" method="post"><label>Amount</label><input type="text" name="amount"></form>';
}

public function store()
{
$amount = $_POST['amount'];
var_dump($amount);
}
}
