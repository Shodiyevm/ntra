<?php
namespace App;

use App\middlewares\Authentication;

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

    public static function get($path, $callback, string|null $middleware = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ((new self())->getResourceId()) {

                $path = str_replace('{id}', (string)(new self())->getResourceId(), $path);

                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new self())->getResourceId());
                    exit();
                }
            }
            if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                (new Authentication())->handle($middleware);
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
    public static function patch(string $path, callable $callback): void
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST['_method']) && strtolower($_POST['_method']) === 'patch') {
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
    }

    public static function delete(string $path, $callback): void
    {
        if(strtolower($_REQUEST['_method']) !== 'delete') {
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ((new self())->getResourceId()) {
                $path = str_replace('{id}', (string) (new self())->getResourceId(), $path);
                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new self())->getResourceId());
                    exit();
                }
            }
            $callback();
            exit();
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
    public function logout(): void
    {
        session_destroy();
        redirect('/login');
    }
}
