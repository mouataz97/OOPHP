<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$date = new DateTime('15/05/2015 19:20PM');
$dateTime = new DateTime(str_replace('/', '-', $date));

var_dump($dateTime);
