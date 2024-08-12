<?php

namespace App;

class branch
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function create(
        string $name,
        string $address,
    )
    {

        $query = "INSERT INTO branch (name, address)
                  VALUES (:name, :address)";
    }


}