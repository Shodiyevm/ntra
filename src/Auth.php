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
        // Foydalanuvchini tekshirish
        $user = (new User())->getByUsername($username, $password);

        if (!$user) {
            $_SESSION['message']['error'] = 'Invalid username or password';
            header('Location: /login');
            exit();
        }

        // Foydalanuvchi va ro'lni olish
        $query = "SELECT users.*, user_role.role_id 
                  FROM users
                  LEFT JOIN user_role ON users.id = user_role.user_id
                  WHERE users.id = :user_id";
        
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $user->id);
        $stmt->execute();
        $userWithRole = $stmt->fetch();

        if ($userWithRole) {
            $_SESSION['user'] = [
                'id' => $userWithRole['id'],
                'username' => $userWithRole['username'],
                'role_id' => $userWithRole['role_id'] ?? null
            ];

            // Rolni tekshirish
            if ($userWithRole['role_id'] === Role::USER) {
                
               dd($userWithRole['role_id']);
                header('Location: /dashboard/home.php');
                exit();
            } elseif ($userWithRole['role_id'] === Role::ADMIN) {
                dd($userWithRole['role_id']);
                header('Location: /');
                exit();
            } else {
                dd($userWithRole);
                $_SESSION['message']['error'] = 'Role not assigned';
                header('Location: /login');
                exit();
            }
        }
        
        dd($userWithRole );
        $_SESSION['message']['error'] = 'Invalid username or password';
        header('Location: /login');
        exit();
    }
}
