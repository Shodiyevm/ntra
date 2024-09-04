<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;


Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));


Router::get('/ads/create', fn() => loadView('dashboard/create-ad'));
Router::post('/ads/create', fn() => (new AdController())->create());

Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));


Router::get('/signup', fn()=> loadView('/auth/signup'));
Router::post('/signup', fn()=> loadController('signup'));

Router::get('/login', fn() => loadView('auth/login', ['role' => 'guest']));
Router::post('/login', fn() => (new \Controller\AuthController())->login());


Router::get('/admin', fn() => loadView('dashboard/home', ['role' => 'auth']));
Router::get('/profile', fn() => (new \Controller\UserController())->loadProfile());

Router::get('/logout', fn() => (new \Controller\AuthController())->logout());


Router::get('/ads/create', fn()=> loadController('createAdG'));
Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));


Router::get('/branch', fn()=> loadController('branch'));
Router::get('/branch/create', fn()=> loadView('dashboard/createBranch'));

Router::erroRessponse(404, 'notFound');





