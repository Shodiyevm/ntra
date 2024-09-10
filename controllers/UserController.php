<?php

declare(strict_types=1);

namespace Controller;

use App\Ads;
use App\Session;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());

        // dd($ads);
        loadView('profile', ['ads' => $ads], false);
    }
    public function  showUsers(): void
    {
        $users = (new \App\User())->getUsers();
        loadView('dashboard/users', ['users' => $users]);
    }
    public  function showuser (int $id): void
    {
        $user = (new \App\User())->getUser($id);
        loadView('dashboard/user', ['user' => $user]);
        
    }
}