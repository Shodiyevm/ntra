<?php

use App\User;

if(isset($_POST['email']) && isset($_POST['password'])){ 

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User();
    $newuser= $user->getchek($email, $password);
    if($newuser){

        header('Location: /');
    }
    else{
        header('Location: /login');
    }
}