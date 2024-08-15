<?php
declare(strict_types=1);



use App\User;
use App\Ads;
//$user=new User();
$ads=new Ads();


$newUser=$ads->updateAds( 11 );
var_dump($newUser);





