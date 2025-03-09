<?php

declare(strict_types=1);

namespace App\Classes;
use App\Exception\RouteNotFoundException;

class Router
{
    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
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
    public function resolve(string $requestURI = null, string $requestMethod = null): mixed
    {
        // Fallback for CLI or testing purposes
        if ($requestURI === null) {
            $requestURI = '/'; // Default route if not available
        }

        if ($requestMethod === null) {
            $requestMethod = 'get'; // Default to GET if not available
        }

        $route = trim(explode('?', $requestURI)[0], '/');
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        return call_user_func($action);
    }
}