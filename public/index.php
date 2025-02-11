<?php

require __DIR__ . '/../vendor/autoload.php';  // Composer autoload
use App\Inovice;

$inovice = new Inovice();
$inovice->process(13, 'test');

//$inovice = new Inovice(25,'test');
$inovice->amount = 25;


//var_dump(isset($inovice->amount));

//unset($inovice->amount);
//var_dump($inovice->amount);

