<?php

declare(strict_types=1);

namespace App;
use App\Exception\RouteNotFoundException;

class Router
{
    private array $routes;
    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve($requestURI): mixed
    {
        $route = explode('?', $requestURI)[0];
        $action = $this->routes[$route] ?? null;

        if(! $action){
            throw new RouteNotFoundException();
        }

        return call_user_func($action);
    }
}