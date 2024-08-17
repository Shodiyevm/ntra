<?php

namespace App;

class Router
{
    protected object|null $update;
    protected string $uri;

    public function __construct()
    {
        $this->update = json_decode(file_get_contents('php://input'));
        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }

    public function getResourceName()
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $path = explode("/", $uri);
        return $path[1] ?? null; 
    }

    public function getResourceId(): false|int
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $path = explode("/", $uri);
        $resourceId = $path[count($path) - 1];
        return is_numeric($resourceId) ? (int)$resourceId : false;
    }

    public static function get($path, $callback): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $router = new self();
            if ($router->getResourceId()) {
                $path = str_replace("{id}", (string)$router->getResourceId(), $path);
                if ($path == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) {
                    $callback($router->getResourceId());
                    exit();
                }
            }
            if ($path == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) {
                $callback();
                exit();
            }
        }
    }

    public function post($path, $callback): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $callback();
            exit();
        }
    }
}
