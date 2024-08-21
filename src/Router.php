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

    public function getResourceName(): ?string
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $path = explode("/", $uri);
        return $path[1] ?? null;
    }

    public function getResourceId(): ?int
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $path = explode("/", $uri);
        $resourceId = $path[count($path) - 1];
        return is_numeric($resourceId) ? (int)$resourceId : null;
    }

    public static function get(string $path, callable $callback): void
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $router = new self();
            $resourceId = $router->getResourceId();

            if ($resourceId !== null) {
                $path = str_replace("{id}", (string)$resourceId, $path);
                if ($path === $router->uri) {
                    $callback($resourceId);
                    exit();
                }
            }

            if ($path === $router->uri) {
                $callback();
                exit();
            }
        }
    }

    public static function post(string $path, callable $callback): void
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $router = new self();
            if ($path === $router->uri) {
                $callback($router->update);
                exit();
            }
        }
    }
    
    public static function erroRessponse(int $code, string $message='error'): void
    {
        http_response_code($code);
        if ($code === 404) {
            loadView('404');
        }
        echo json_encode(['ok' => false, 'code' => $code, 'message' => $message]);
        exit();
    }
}
