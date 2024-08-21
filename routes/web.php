<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn() => loadController('home'));




Router::get('/ads/{id}', function(int $id) {
   loadController('showAd', ['id' => $id]);
});


Router::get('/ads/create', fn()=> loadController('createAdG'));
Router::post('/ads/create',  fn()=> loadController('create-ad'));





Router::get('/branch', fn()=> loadController('branch'));
Router::get('/branch/create', fn()=> loadView('dashboard/createBranch'));
Router::post('/branch/create', fn()=> loadController('createBranch'));


Router::get('/status', fn()=> loadController('showStatus'));
Router::get('/status/create', fn()=> loadView('dashboard/create-status'));
Router::post('/status/create', fn()=> loadController('createStatus'));


Router::erroRessponse(404, 'notFound');

