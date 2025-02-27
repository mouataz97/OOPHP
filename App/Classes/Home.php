<?php

namespace App\Classes;

class Home
{
    public function index(): string
    {
        setcookie(
            'userName',
            'Mouataz',
            time() + 12
        );

        return View::make('index', $_GET)->render();
    }
}
