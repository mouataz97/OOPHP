<?php
namespace App\Implementation;
interface Collector {
    public function __construct();
    public function collect(float $owedAmount): float;
}

?>
