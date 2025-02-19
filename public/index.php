<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$dateTime = new DateTime('Tomorrow 3:35pm');
$dateTime2 = new DateTime('05/12/2025 12:00am', new DateTimeZone('Africa/Casablanca'));

var_dump($dateTime);
echo PHP_EOL;
var_dump($dateTime2);