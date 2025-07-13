<?php

declare(strict_types=1);

namespace App\Models;

class Invoice extends \App\Model
{
    public function create(float $amount, int $userId): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO invoices (amount, user_id) 
            VALUES (?, ?)'
        );

        $stmt->execute([$amount, $userId]);

        return (int) $this->db->lastInsertId();
    }

    public function find(int $id): array
    {
        $stmt = $this->db->prepare(
            'SELECT invoices.id, invoices.amount, users.full_name
             FROM invoices
             LEFT JOIN users ON users.id = invoices.user_id
             WHERE invoices.id = ?'
        );
        $stmt->execute([$id]);
        $invoice = $stmt->fetch();
        return $invoice ?: [];
    }
}
