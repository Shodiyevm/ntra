<?php

use App\User;
use App\Auth;

if(isset($_POST['email']) && isset($_POST['password'])){ 

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new Auth();
    $newuser= $user->login($email, $password);

    
}