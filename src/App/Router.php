<?php

declare(strict_types=1);

namespace App;

use App\Exception\RouteNotFoundException;

class Router
{
    private array $routes = [];

    public function __construct()
    {
    }

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $requestMethod = strtolower($requestMethod);
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    /**
     * @throws RouteNotFoundException
     */
    public function resolve(?string $requestURI = null, ?string $requestMethod = null): mixed
    {
        $requestMethod = strtolower($requestMethod ?? 'get');
        $route = '/' . trim(explode('?', $requestURI ?? '/')[0], '/');
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (!class_exists($class) || !method_exists($class, $method)) {
                throw new RouteNotFoundException();
            }

            $instance = new $class();
            return $instance->$method();
        }

        return call_user_func($action);
    }
}
