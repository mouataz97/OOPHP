<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Router;
use PHPUnit\Framework\Attributes\Test;

class RouterTest extends TestCase
{
    #[Test]
    public function test_that_it_registers_a_route(): void
    {
        $router = new Router();
        $router->register('get', '/users', ['Users', 'index']);
        $expected = [
            'get' => [
                '/users' => ['Users', 'index'],
            ],
        ];
        $this->assertEquals($expected, $router->routes());
    }

    #[Test]
    public function it_registers_a_get_route(): void
    {
        $router = new Router();
        $router->get('/users', ['Users', 'index']);
        $router->post('/users', ['Users', 'store']);
        $expected = [
            'get' => [
                '/users' => ['Users', 'index'],
            ],
            'post' => [
                '/users' => ['Users', 'store'],
            ],
        ];
        $this->assertEquals($expected, $router->routes());
    }

    #[Test]
    public function it_registers_a_post_route(): void
    {
        $router = new Router();

        $router->post('/users', ['Users', 'store']);
        $expected = [
            'post' => [
                '/users' => ['Users', 'store'],
            ],
        ];
        $this->assertEquals($expected, $router->routes());
    }
    #[Test]
    public function there_is_no_route_when_router_is_created(): void
    {
        $router = new Router();
        $this->assertEmpty($router->routes());
    }
}