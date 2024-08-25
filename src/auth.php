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
    public  function login(string $username, string $password): bool
    {
        $users=(new User())->getByUsername( $username , $password);
        if($user){
            $_SESSION['user'] =  [ $user['username'],
               
            'id' => $user['id'],
               
            ];
            unset($_SESSION['message']['error']);
            header('Location: /');
            exit();

        }
        $_SESSION['message']['error'] = 'Invalid username or password';
        header('Location: /login');
    }
}