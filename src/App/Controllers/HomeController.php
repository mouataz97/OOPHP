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

        $email = 'joshn@doe.com';
        $name = 'Joshn Doe';
        $amount = 25;

        try {
            // Check if user already exists
            $fetchUserStmt = $db->prepare('SELECT id FROM users WHERE email = ?');
            $fetchUserStmt->execute([$email]);
            $user = $fetchUserStmt->fetch();

            if ($user) {
                throw new \Exception('User already exists');
            }

            $db->beginTransaction();

            $newUserStmt = $db->prepare(
                'INSERT INTO users (email, full_name, is_active, created_at) VALUES (?, ?, 1, NOW())'
            );
            $newUserStmt->execute([$email, $name]);

            $userId = $db->lastInsertId();

            $newInvoiceStmt = $db->prepare(
                'INSERT INTO invoices (amount, user_id) VALUES (?, ?)'
            );
            $newInvoiceStmt->execute([$amount, $userId]);

            $db->commit();

            $fetchInvoicesStmt = $db->prepare(
                'SELECT invoices.id as invoice_id, invoices.user_id, users.full_name
                 FROM invoices
                 INNER JOIN users ON invoices.user_id = users.id
                 WHERE users.email = ?'
            );
            $fetchInvoicesStmt->execute([$email]);
            $invoices = $fetchInvoicesStmt->fetchAll();

            // Return a view (replace with actual view logic)
            return new View('home', ['invoices' => $invoices]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            // Handle error (replace with actual error handling)
            throw $e;
        }
    }
}
