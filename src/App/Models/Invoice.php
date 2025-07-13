<?php

declare(strict_types=1);

namespace App\Models;

class Invoice extends Model
{
    public function __construct()
    {
        
    }
    public function create(float $amount, int $userId): int
    {
        $newInvoiceStmt = $this->db->prepare(
            'INSERT INTO invoices (amount, user_id) 
            VALUES (?, ?)'
        );

        $stmt->execute([$amount, $userId]);

        return (int) $this->db->lastInsertId();
    }
}
