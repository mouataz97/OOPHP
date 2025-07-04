<?php

declare(strict_types=1);

namespace App;

class App
{
    private Router $router;

    public function __construct(protected Router $router, protected array $request)
    {
    }

    public function run()
    {
        try {
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
        } catch (Exception\RouteNotFoundException $e) {
            http_response_code(404);
            echo View::make('error/404');
        }
    }
}