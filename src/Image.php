<?php

declare(strict_types=1);

namespace App;

use PDO;

class Image
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function addImage(int $adsId, string $name): bool
    {
        $query = "INSERT INTO ads_image (ads_id, name)
                 VALUES (:ads_id, :name)";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':ads_id', $adsId);
        $statement->bindParam(':name', $name);
        return $statement->execute();
    }
    public function getImage(int $id)
    {
        $query = "SELECT * FROM ads_image WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    public function updateImage( $id, string $name): bool
    {
        $query = "UPDATE ads_image SET name = :name WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':name', $name);
        return $statement->execute();
    }

    public function deleteImage(int $id): bool
    {
        $query = "DELETE FROM ads_image WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id);
        return $statement->execute();
    }

    public function handleUpload(): string
    {

        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            exit('Error: '.$_FILES['image']['error']);
        }

        $name       = $_FILES['image']['name'];
        $path       = $_FILES['image']['tmp_name'];
        $uploadPath = basePath("/public/assets/images/ads");

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }
     
        
        $fileName     = uniqid().'___'.$name;
        $fullFilePath = "$uploadPath/$fileName";

    
        $fileUploaded = move_uploaded_file($path, $fullFilePath);
        if (!$fileUploaded) {
            exit('Fayl yuklanmadi');
        }
        return $fileName;
    }
}