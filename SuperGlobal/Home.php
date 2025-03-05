<?php

class Home
{
    public function index(): string
    {
        // Output the GET and POST data for debugging purposes
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        // Render a form
        return '<form method="post"><label>Amount</label><input type="text" name="Amount"></form>';
    }
}
