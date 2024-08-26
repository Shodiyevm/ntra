<?php

namespace App;

use PDO;

class DB
{
    public static function connect():PDO
    {
        $dsn = "{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}";
        return new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], options:[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
    }
}



