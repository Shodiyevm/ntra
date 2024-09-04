<?php

declare(strict_types=1);

namespace App;

use PDO;

class Auth
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function login(string $username, string $password)
    {
        // Get user or fail
        $user = (new User())->getByUsername($username, $password);

        // Get users role
        $query = "SELECT users.*, user_role.role_id
                  FROM users
                      JOIN user_role ON users.id = user_role.user_id
                  WHERE id = $user->id";



        $userWithRoles = $this->pdo->query($query)->fetch();
        if ($userWithRoles->role_id === Role::ADMIN) {
            redirect('/admin');

            
        }


        if ($userWithRoles) {
            $_SESSION['user'] = [
                'username' => $userWithRoles->username,
                'id'       => $userWithRoles->id,
                'role'     => $userWithRoles->role_id
            ];

            unset($_SESSION['message']['error']);
            redirect('/profile');
        }

        $_SESSION['message']['error'] = "Wrong email or password";
        redirect('/login');
    }
}