<?php

declare(strict_types=1);

namespace App;

use App\Exception\RouteNotFoundException;

class App
{
    private static DB $db;
    private static Container $container;

    public function __construct(protected Router $router, protected array $request, protected array $config)
    {    
        static::$db = new DB($config->db ?? []);
            static::$container = new Container();

            static::$container->set(InvoiceService::class, function(Container $c){
                return new InvoiceService(
                    $c->get(SalesTaxService::class),
                    $c->get(PaymentGateway::class),
                    $c->get(EmailService::class)
                );
            }
        );
        static::$container->set(SalesTaxService::class, fn() => new SalesTaxService();
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
