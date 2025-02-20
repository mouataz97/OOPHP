<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$date1 = new DateTime('04/05/2015 9:15 PM');
$date2 = new DateTime('05/05/2015 9:50 AM');

var_dump($date1->diff($date2));

