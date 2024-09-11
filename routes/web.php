<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;

Router::get('/', fn() => (new \Controller\AdController())->home());
Router::get('/contact', fn() =>(new \Controller\AdController())->showcontact());

Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/adminpro' , fn() => (new AdController())->index());


Router::get('/users/{id}', fn( int $id) => (new \Controller\UserController())->showuser($id));

Router::get('/ads/create', fn() => (new AdController())->createAdForm(),'auth');

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


Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));


Router::delete('/ads/delete/{id}', fn(int $id)=>(new AdController())->delete($id));

Router::get('/branch', fn() => (new \Controller\BranchController())->getBranches());
Router::get('/branch/create', fn() => (new \Controller\BranchController())->create());
Router::get("/userbranch",fn()=>(new \Controller\BranchController())->getuserBranch());
Router::get('/users', fn() => (new \Controller\UserController())->showUsers());
Router::get('/search', fn() => (new \Controller\AdController())->search());

Router::get('/branch/{id}', fn($id) => (new \Controller\AdController())->home( $id, $_GET['search_phrase'] ?? ''));

Router::erroRessponse(404, 'notFound');





