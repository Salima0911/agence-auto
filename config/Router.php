<?php

namespace Config;

use App\Controllers\ErrorController;

class Router
{

    private $routes = [];
    public function getURI()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function addRoute(string $pattern, $controllerClass, $method)
    {

        $this->routes[$pattern] = [
            'controller' => $controllerClass,
            'method' => $method
        ];
    }
    public function handleRequest()
    {
        $uri = $this->getURI();
        // /////////
        $routeFound = false;
        ////////////
        foreach ($this->routes as $pattern => $routeInfo) {
            if ($uri === $pattern) {
                ///////////
                $routeFound = true;
                ////////////
                $controllerClass = $routeInfo['controller'];
                $method = $routeInfo['method'];
                $controllerClass = "App\\Controllers\\" . $controllerClass;
                $controller = new $controllerClass();
                $controller->$method();

                ////////
                break;
                //////
            }
        }
        /////////
        if (!$routeFound) {
            ErrorController::notFound();
        }
        /////////
    }
}
