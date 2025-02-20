<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$date1 = new DateTime('05/05/2015 9:15PM');
$date2 = new DateTime('05/05/2015 9:15AM');

var_dump($date1 < $date2);
var_dump($date1 > $date2);
var_dump($date1 === $date2);
var_dump($date1 <=> $date2);

