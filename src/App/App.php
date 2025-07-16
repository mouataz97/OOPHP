<?php

declare(strict_types=1);

namespace App;

use App\Exception\RouteNotFoundException;
// use App\View;  // View is in App namespace
use App\View; // Update this line if View is in App\View namespace
use App\DB;    // DB is in App namespace
use App\Router; // Router is in App namespace

class App
{
    private static ?DB $db = null;

    public function __construct(protected Router $router, protected array $request, protected array $config)
    {    
        if (static::$db === null) {
            static::$db = new DB($config);
        }
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
