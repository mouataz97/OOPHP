<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$dateTime = new DateTime('Now');
echo $dateTime->getTimezone()->getName() . ' ' . $dateTime->format('m/d/y g:i A').PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));
$dateTime->se0tDate(2021,3, 14)->setTime(16, 56);
echo $dateTime->getTimezone()->getName() . ' ' . $dateTime->format('m/d/y g:i A').PHP_EOL;
