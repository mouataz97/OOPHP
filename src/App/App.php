<?php

declare(strict_types = 1);

namespace App;

use App\Exception\RouteNotFoundException;
use App\View;
use App\DB;
use App\Router;

class App
{
    private static ?DB $db = null;

    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {

        static::$db = new DB($config->db ?? []);

    }

    public static function db(): DB
    {
        if (static::$db === null) {
            throw new \RuntimeException('Database not initialized.');
        }
        return static::$db;
    }

    public function run(): void
    {
        $uri = $this->request['uri'] ?? '/';
        $method = strtolower($this->request['method'] ?? 'get');

        try {
            echo $this->router->resolve($uri, $method);
        } catch (RouteNotFoundException $e) {
            http_response_code(404);
            echo View::make('error/404');
        }
    }
}

class View
{
    public static function make(string $template, array $data = []): string
    {
        // Simple example: include a PHP template file and return its output
        $templatePath = __DIR__ . '/../views/' . $template . '.php';
        if (!file_exists($templatePath)) {
            return 'View not found: ' . htmlspecialchars($template);
        }
        ob_start();
        extract($data);
        include $templatePath;
        return ob_get_clean();
    }
}
