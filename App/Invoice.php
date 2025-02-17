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
//        var_dump($data);
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCard = base64_decode($data['creditCard']);
    }
}