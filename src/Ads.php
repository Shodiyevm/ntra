<?php

declare(strict_types=1);

namespace App;

use PDO;

class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createAds(
        string $title,
        string $description,
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        string $address,
        float  $price,
        int    $rooms
    ): false|string {
        $query = "INSERT INTO ads (title, description, user_id, status_id, branch_id, address, price, rooms, created_at) 
                  VALUES (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    
        public function getAd(int $id)
        {    
            $query = "SELECT 
                        ads.id AS id,
                        ads.title AS title,
                        ads.description AS description,
                        ads.price AS price,
                        ads.rooms AS rooms,
                        ads.address AS address,
                        ads.created_at AS created_at,
                        branch.name AS branch,
                        users.username AS user,
                        users.position AS position,
                        users.gender AS gender,
                        users.phone AS phone,
                        status.name AS status_name,
                        ads_image.name AS image
                      FROM ads
                      JOIN branch ON branch.id = ads.branch_id
                      JOIN users ON users.id = ads.user_id
                      JOIN status ON status.id = ads.status_id
                      LEFT JOIN ads_image ON ads_image.ads_id = ads.id
                      WHERE ads.id = :id";  
            
            
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result === false ? null : $result;
    }
        
    public function getAds(): array|false
    {
        $query = "SELECT ads.*, ads_image.name AS image, branch.name AS branch_name, status.name AS status_name
                  FROM ads
                  LEFT JOIN branch ON branch.id = ads.branch_id
                  LEFT JOIN status ON status.id = ads.status_id
                  LEFT JOIN ads_image ON ads.id = ads_image.ads_id";

        return $this->pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUsersAds( $userId): array|false
    {
        $query = "SELECT ads.*, ads_image.name AS image, branch.name AS branch_name, status.name AS status_name
                  FROM ads
                  LEFT JOIN branch ON branch.id = ads.branch_id
                  LEFT JOIN status ON status.id = ads.status_id
                  LEFT JOIN ads_image ON ads.id = ads_image.ads_id
                  WHERE ads.user_id = :user_id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateAds(
        int    $id,
        string $title,
        string $description,
        string $address,
        float  $price,
        int    $rooms
    ): bool {
        $query = "UPDATE ads SET title = :title, description = :description,
                       address = :address, 
                 price = :price, rooms = :rooms, updated_at = NOW() WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        return $stmt->execute();
    }

    public function deleteAds(int $id): bool

    {
        unlink("/assets/images/ads/" . $this->getAd($id)->image);
        $query = "DELETE FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
