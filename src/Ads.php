<?php

namespace App;

class Ads
{
    private \PDO $pdo;

    public function __construct()
    {

        $this->pdo = DB::connect();
    }

    public function create(
        string $title,
        string $description,
        string $user_id,
        string $branch_id,
        string $status_id,
        string $price,

    ): array|false
    {

        $query = "INSERT INTO ads (title, description, user_id, branch_id, status_id, price, created_at)
                  VALUES (:title, :description, :user_id, :branch_id, :status_id, :price, NOW())";


        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':price', $price);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAds(int $id)
    {
        $this->pdo = DB::connect();
        $query = "SELECT * FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        public  function  updateAds(  string $title, string $description, string $user_id, string $branch_id,
        string $status_id, string $price, string $created_at, string $updated_at)
        {
            $query="UPDATE ads SET title = :title, description = :description, user_id = :user_id, 
            branch_id = :branch_id, status_id = :status_id, price = :price, created_at = :created_at, 
            updated_at = :updated_at WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':branch_id', $branch_id);
            $stmt->bindParam(':status_id', $status_id);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':updated_at', $updated_at);
            $stmt->execute();
        }

        public  function  deleteAds(int $id)
        {
            $query="DELETE FROM ads WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
}