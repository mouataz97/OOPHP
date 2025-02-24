<?php

declare(strict_types=1);

namespace App;
use App\Exception\RouteNotFoundException;

class Router
{
    private array $routes;
    public function register(string $route, callable $action)
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve($requestURI)
    {
        $route = explode('?', $requestURI)[0];
        $action = $this->routes[$route] ?? null;

        if(! $action){
            throw new RouteNotFoundException();
        }

        return call_user_func($action);
    }
}