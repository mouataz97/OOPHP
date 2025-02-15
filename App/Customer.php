<?php
declare(strict_types=1);

namespace App;

class Customer
{
    use Mail;
    public function updateProfile()
    {
        echo 'Profile Updated' . PHP_EOL;
    }
}