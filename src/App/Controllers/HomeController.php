<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\View;
use App\Models\Users;
use App\Models\Invoice;
use App\Models\SignUp;
use PDO;

class HomeController
{
    public function index(): string
    {
        $email = 'joshn@doe.com';
        $name = 'Joshn Doe';
        $amount = 25;

        $userModel = new Users();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register([
            'email' => $email,
            'name'  => $name,
        ],
        [
            'amount' => $amount,
        ]);

        $invoice = $invoiceModel->find($invoiceId);
        return View::make('index', ['invoice' => $invoice]);
    }
}
