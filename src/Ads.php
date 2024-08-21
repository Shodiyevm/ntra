<?php

namespace App;
use PDO;

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
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        string $address,
        float  $price,
        int    $rooms
    ): bool|array|object
    {
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

            return $stmt->fetch();
    }

    public function getAd(int $id)
    {
        $this->pdo = DB::connect();
        $query = "SELECT * FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public  function  updateAds(  string $title, string $description, int  $user_id, int $branch_id,
        int $status_id, float $price)
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
    public function getAds()
{    
    $query = "SELECT 
                ads.id AS id,
                ads.title AS title,
                ads.description AS  description,
                ads.price AS   price,
                ads.rooms AS  rooms,
                ads.address AS  address,
                ads.created_at AS  created_at,
                branch.name AS branch,
                users.username AS user,
                users.position AS  position,
                users.gender AS gender,
                users.phone AS  phone,
                status.name AS  status_name
              FROM ads
              JOIN branch ON branch.id = ads.branch_id
              JOIN users ON users.id = ads.user_id
              JOIN status ON status.id = ads.status_id";
    
   return $this->pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
}

public function getAdr(int $id)
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
                status.name AS status_name
              FROM ads
              JOIN branch ON branch.id = ads.branch_id
              JOIN users ON users.id = ads.user_id
              JOIN status ON status.id = ads.status_id
              WHERE ads.id = :id";  // Bu yerda idni bog'lab oldik
    
    $stmt = $this->pdo->prepare($query); // So'rovni tayyorlaymiz
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Parametrni bog'laymiz
    $stmt->execute(); // So'rovni bajarib, natijani olamiz
    
    return $stmt->fetchAll(PDO::FETCH_OBJ); // Natijani obyekt shaklida qaytaramiz
}


}