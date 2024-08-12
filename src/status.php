<?php

namespace App;

class status
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function create(
        string $name,

    ) : array|false
    {
        $query = "INSERT INTO status (name)
                  VALUES (:name)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        var_dump($stmt->execute());

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getStatus(int $id)
    {
     $query = "SELECT * FROM status WHERE id = :id";
     $stmt = $this->pdo->prepare($query);
     $stmt->bindParam(':id', $id);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     public function updeateStatus(string $name)
     {
        $query=" UPDATE status SET name = :name WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
     }
        public function deleteStatus(int $id)
        {
            $query="DELETE FROM status WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
}