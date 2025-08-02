<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Router;
use App\Exception\RouteNotFoundException;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProviderExternal;

class RouterTest extends TestCase
{
    private Router $router;
    protected function setUp(): void
    {
        parent::setUp();
        $this->router = new Router();
    }
    #[Test]
    public function it_registers_a_route(): void
    {
        $this->router->register('get', '/users', ['Users', 'index']);
        $expected = [
            'get' => [
                '/users' => ['Users', 'index'],
            ],
        ];
        $this->assertEquals($expected, $this->router->routes());
    }

    #[Test]
    public function it_registers_a_get_route(): void
    {
        $this->router->get('/users', ['Users', 'index']);
        $this->router->post('/users', ['Users', 'store']);
        $expected = [
            'get' => [
                '/users' => ['Users', 'index'],
            ],
            'post' => [
                '/users' => ['Users', 'store'],
            ],
        ];
        $this->assertEquals($expected, $this->router->routes());
    }

    #[Test]
    public function it_registers_a_post_route(): void
    {
        $this->router->post('/users', ['Users', 'store']);
        $expected = [
            'post' => [
                '/users' => ['Users', 'store'],
            ],
        ];
        $this->assertEquals($expected, $this->router->routes());
    }
    #[Test]
    public function there_is_no_route_when_router_is_created(): void
    {
        $this->assertEmpty((new Router())->routes());
    }
    #[Test]
    #[DataProviderExternal(\Tests\DataProviders\RouterDataProvider::class, 'routeNotFoundCases')]
    public function it_throws_route_not_found_exception(
        string $requestUri, string $requestMethod): void
    {
        $users = new class(){
            public function delete(): bool
            {
                return true;
            }
        };

        $this->router->post('/users', [$users::class, 'store']);
        $this->router->get('/users', ['Users', 'index']);
        
        $this->expectException(RouteNotFoundException::class);
        $this->router->resolve($requestUri, $requestMethod);
    }
    /** @test */
    public function it_resolve_route_from_closure(): void
    {
        $this->router->get('/users', fn() => [1, 2, 3]);
        $this->assertEquals(
            [1,2,3],
            $this->router->resolve('/users', 'get')
        );
    }
    public function it_resolve_route():void 
    {
        $user = new class(){
            public function index(): array
            {
                return [1,2,3];
            }
        };
        $this->router->get('/users', [$user, 'index']);

        $this->assertEquals(
            [1,2,3],
            $this->router->resolve('/users', 'get')
        );
    }
}