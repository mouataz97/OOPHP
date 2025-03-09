<?php

class Router
{
    private array $routes = [];

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

    public function resolve(string $requestUri): string
    {
        $route = explode('?', $requestUri)[0]; // This strips query parameters from the URI
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException("Route not found for: {$route}");
        }

        if (is_callable($action)) {
            return call_user_func($action); // If it's a closure/callback, just call it
        }

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $instance = new $class();
                if (method_exists($instance, $method)) {
                    return $instance->$method();
                }
                throw new RouteNotFoundException("Method {$method} not found in class {$class}");
            }
            throw new RouteNotFoundException("Class {$class} not found.");
        }

        throw new RouteNotFoundException("Invalid route action.");
    }
}

class RouteNotFoundException extends \Exception
{
    protected $message = 'Route not found';
}
