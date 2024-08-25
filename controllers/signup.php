<?php

use App\User;


if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['position']) && isset($_POST['gender'], $_POST['phone'])){
    $user = new User();
    $newUser = $user->create ($_POST['username'], $_POST['position'], $_POST['gender'], $_POST['email'],$_POST['password'], $_POST['phone']);
    if($newUser){
    header('location: /');
    
    }

}