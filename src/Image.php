<?php
declare(strict_types=1);
namespace App;
use PDO;

class Image {
   private PDO $pdo;

   public function __construct()
   {
       $this->pdo = DB::connect();
   }
   
   public function addImage(int $adsId, string $name): bool
   {
       $query = "INSERT INTO images (ads_id, name) VALUES (:ads_id, :name)";
       $stmt = $this->pdo->prepare($query);
       $stmt->bindParam(':ads_id', $adsId);
       $stmt->bindParam(':name', $name);
       return $stmt->execute();
   }
   public function handleUpload(): string
   {
      if( $file = $_FILES['image']['error'] !==UPLOAD_ERR_OK ){
        exit('error'.$_FILES['image']['error']);

      }
      $name = $_FILES['image']['name'];
      $path=$_FILES['image']['tmp_name'];
      $uploadPath=basePath('/public/assets/images/ads/');

}  
}