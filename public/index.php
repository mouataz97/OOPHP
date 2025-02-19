<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$dateTime = new DateTime('Tomorrow 3:35pm');
echo $dateTime->format('m/d/y g:i A').PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));
echo $dateTime->format('m/d/y g:i A').PHP_EOL;