<?php

declare(strict_types=1);

namespace App\Classes;
use App\Exception\RouteNotFoundException;

class Router
{
    private array $routes;
    public function register(string $requestMethod,string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function posix_times(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    public function resolve(string $requestURI, string $requestMethod): mixed
    {
        $route = explode('?', $requestURI)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;

        if(! $action){
            throw new RouteNotFoundException();
        }

        return call_user_func($action);
    }
}