<?php

namespace App\Classes;

class Home
{
    public function index(): string
    {
        echo '<pre>';
        var_dump($_REQUEST);
        echo '<pre>';

        echo '<pre>';
        var_dump($_GET);
        echo '<pre>';

        echo '<pre>';
        var_dump($_POST);
        echo '<pre>';

        return '<form action="/foo=bar&amount=149" method="post"><label>Amount<input type="text"></label></form>';
    }
}