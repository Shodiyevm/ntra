<?php

namespace App;

use PDO;

class Branch
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $name, string $address): void
    {
        $query = "INSERT INTO branch (name, address) VALUES (:name, :address)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }

    public function getBranches(): false|array
    {
        $query = "SELECT * FROM branch";
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(int $id, string $name, string $address): void
    {
        $query = "UPDATE branch SET name = :name, address = :address WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }

    public function delete(int $id): void
    {
        $query = "DELETE FROM branch WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
