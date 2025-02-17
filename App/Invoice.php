<?php

namespace App;
use Exception;
class Invoice
{
    public string $id;
    public function __construct
    (
        public float $amount,
        public string $description,
        public string $creditCard
    )
    {
        $this->id = uniqid('invoice_');
    }
//    public function __sleep(): array
//    {
//        return [$id, $amount];
//    }
    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
    public function __serialize(): array
    {
        return [
          'id' => $this->id,
          'amount' => $this->amount,
            'description' => $this->amount,
            'creditCard' => base64_encode($this->creditCard),
            'foo' => 'bar',
        ];
    }
    public function __unserialize(array $data): void
    {
        // TODO: Implement __unserialize() method.
    }
}