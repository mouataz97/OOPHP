<?php

namespace App\Classes;

class Home
{
    public function index(): string
    {
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

        return View::make('index', $_GET)->render();
    }
}