<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        try{
            $db = new \PDO('mysql:host=127.0.0.1;dbname=my_db', 'root', 'root', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]);

            $email = 'jhone@doe.com';
            $name = 'Jhon Doe';
            $is_active = 1;
            $createAT = date('Y-m-d H:i:s', strtotime('06/21/2025 2:12 PM'));

            $query = 'INSERT INTO users (email, full_name, is_active, created_at) 
                      VALUES (?, ?, ?, ?)';

            $stmt = $db->prepare($query);
            $stmt->execute([$email, $name, $is_active, $createAT]);

            $id = $db->lastInsertId();
            $user = $db->query("SELECT * FROM users WHERE id = $id")->fetch();

            echo '<pre>' ;
            var_dump($user);
            echo '</pre>';
            
        }catch(\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

        return View::make('index');
    }
}