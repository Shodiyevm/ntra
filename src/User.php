<?php

namespace App;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct(){
        $this->pdo = DB::connect();
    }

 
         public function create(
            string $username,
            string $position,
            string $gender,
            string $email,
            string $password,
            string $phone
        )
        {
            
            $query = "INSERT INTO users (username, position, gender, email, password, phone, created_at)
                      VALUES (:username, :position, :gender, :email, :password,  :phone, NOW())";
        
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
            
            return true;


        }
        

    public function getUser(int $id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getByUsername( string $username, string $password)
    {
        
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();


        return $stmt->fetch();

    }
    public function updateUser(
        int $id,
        string $username,
        string $position,
        string $gender,
        string $phone,
        string $email,
        string $password
    )
    {
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, email = :email, password = :password WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    public function deleteUser(int $id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getchek(string $email, string $password)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $password === $user['password']) {
            return true;
        } else {
            return false;
        }
    }
    public function logout( )
    {

        session_start();

        $userId = $_SESSION['user_id'];
        $this->deleteUser($userId);

        session_destroy();

        header("Location: /");
        exit();
    }
}

