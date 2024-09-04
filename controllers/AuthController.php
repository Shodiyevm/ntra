<?php

declare(strict_types=1);

namespace Controller;

use App\Auth;
use App\User;
class AuthController
{

    public function login(): void
    {
        if(isset($_POST['username']) && isset($_POST['password'])){ 
        
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = new Auth();
            $newuser= $user->login($username, $password);
        
            
        }

}
 public function signup(): void {
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['position']) && isset($_POST['gender'], $_POST['phone'])){
        $user = new User();
        $newUser = $user->create ($_POST['username'], $_POST['position'], $_POST['gender'], $_POST['email'],$_POST['password'], $_POST['phone']);
        if($newUser){
        header('location: /');
        
        }
    
    }

 }
   public function logout(): void
   {
    
      if(isset($_SESSION['user'])){
        // dd("ishladi");
        unset($_SESSION['user']);

        header('location: /login');
      }
       
   }
}