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
        string $phone
    ): array|false
    {


        $query = "INSERT INTO users (username, position, gender, phone, created_at)
                  VALUES (:username, :position, :gender, :phone, NOW())";

        $stmt = $this->pdo-> prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        var_dump($stmt->execute());

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUser(int $id)
    {
     $query = "SELECT * FROM users WHERE id = :id";
     $stmt = $this->pdo->prepare($query);
     $stmt->bindParam(':id', $id);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateUser( int $id, string $username, string $position, string $gender, string $phone)
    {

        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone WHERE id = :id";
        $stmt =$this->pdo ->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }




    public function deleteUser(int $id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo  ->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }



}

