<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\User;
use App\Ads;
//$user=new User();
$ads=new Ads();


$newUser=$ads->create("title","description",'1',"1","1" ,"123");
var_dump($newUser);




