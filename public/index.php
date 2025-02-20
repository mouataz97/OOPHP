<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
// DateTime Object
# https://www.php.net/manual/en/book.datetime.php

$date = '20/2/2025';

$dateTime = DateTime::createFromFormat('d/m/y g:iA', $date)->setTime(0, 0);

var_dump($dateTime, new DateTime('20/2/2025'));
