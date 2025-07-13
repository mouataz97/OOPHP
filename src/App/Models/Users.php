<?php

declare(strict_types=1);

namespace App\Models;

class Users extends \App\Model
{
    public function create(string $email, string $name, bool $isActive = true): int
    {
        $newUserStmt = $this->db->prepare(
            'INSERT INTO users (email, full_name, is_active, created_at) 
            VALUES (?, ?, ?, NOW())'
        );
        $newUserStmt->execute([$email, $name, $isActive]);

        return (int) $this->db->lastInsertId();
    }
}
