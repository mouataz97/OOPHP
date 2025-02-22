<?php

namespace App;
use Traversable;

class InvoiceCollection implements \IteratorAggregate
{

    /**
     * @Invoice className
     * @property int
     */
    private int $key;
    public function __construct(public array $invoices)
    {
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->invoices);
    }
}