<?php

namespace App;

# Magic Methods & How they work.

class Invoice
{
    use Mail;
    public function process()
    {
        echo 'Processed invoice' . PHP_EOL;
        $this->sendEmail();
    }
}