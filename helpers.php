<?php


use App\Ads;
use App\Router;

function dd ($args){
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    
    die();

}

function getAds(): array|false {
    return (new Ads())->getAds();
}

function basePath(string $path): string {
    return __DIR__ . $path;
}

function loadView(string $path, array|null $args = null): void {

      $filePath= basePath('/public/pages/' . $path . '.php');

     if(!file_exists($filePath )) {
         echo 'Resource not found' . $filePath;
         return;
     }

    if (is_array($args)) {
        extract($args);
    }
    require $filePath;
}

function loadPartial(string $path, array|null $args = null): void {
    if (is_array($args)) {
        extract($args);
    }
    require basePath('/public/partials/' . $path . '.php');
    
}

function loadController(string $path, array|null $args = null): void {
    $filePath = __DIR__ . '/controllers/' . $path . '.php';

    if (!file_exists($filePath)) {
        echo "Controller not found at: " . $filePath;
        return;
    }

    if (is_array($args)) {
        extract($args);
    }

    require $filePath;
}

