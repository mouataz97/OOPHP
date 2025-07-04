<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        $db = App::db();

            $email = 'john@doe.com';
            $name = 'John Doe';
            $amount = 25;

        try {
        $db->beginTransaction();

            $newUserStmt = $db->prepare(
                'INSERT INTO users (email, full_name, is_active, Cceated_at) 
                VALUES (?, ?, 1, NOW())'
            ); 
            
            $newInvoiceStmt = $db->prepare(
                'INSERT INTO invoices (amount, user_id) 
                VALUES (?,?)'
            ); 
        }catch (\Throwable $e) {
            if($db->inTransaction()) {
                // Rollback the transaction if it was started
            $db->rollBack();
        }

            $fetchUserStmt = $db->prepare(
                'SELECT id FROM users WHERE email = ?'
            );

            $fetchUserStmt->execute([$email]);
            $user = $fetchUserStmt->fetch();

            if ($user) {
                throw new \Exception('User already exists');
        }

            $newUserStmt->execute([$email, $name]);

            $userId = $db->lastInsertId();

            $newInvoiceStmt->execute([$amount, $userId]);

            $db->commit();

            $fetchInvoicesStmt = $db->prepare(
                'SELECT invoices.id as invoice_id, user_id, full_name
                FROM invoices
                Inner JOIN users ON users_id = user.id
                WHERE email = ?'
            );
            

    }
}