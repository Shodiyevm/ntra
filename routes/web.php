<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn() => loadController('home'));




Router::get('/ads/{id}', function(int $id) {
   loadController('showAd', ['id' => $id]);
});

Router::get('/ads/create', fn() => loadView('/dashboard/create-ad'));

Router::post('/ads/create', fn() => loadController('create-ad'));


Router::get('/ads/create', fn() => loadController('createAd'));



Router::erroRessponse(404, 'notFound');

