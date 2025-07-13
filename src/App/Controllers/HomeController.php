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
            $db->beginTransaction();

            $userModel = new Users();
            $invoiceModel = new Invoice();

            $userId = $userModel->create($email, $name);
            $invoiceId = $invoiceModel->create($amount, $userId);

            $db->commit();

            // Return a view (replace with actual view logic)
            return new View('home', ['invoices' => $invoices]);
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            // Handle error (replace with actual error handling)
            throw $e;
        }

        $fetchStmt = $db->prepare(
            'SELECT invoices.id as invoice_id, invoices.user_id, users.full_name
             FROM invoices
             INNER JOIN users ON invoices.user_id = users.id
             WHERE email LIKE ?'
        );

        $fetchStmt->execute(['%'.$email.'%']);
        echo '<pre>';
        var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';
        $invoices = $fetchStmt->fetchAll();

        return new View('home', ['invoices' => $invoices]);
    }
}
