<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends Testcase
{
    /** @test */
    public function it_registers_a_route(): void 
    {
        // given that we have a router object
        $router = new Router();

        // when we call a register method
        $router->register('get', '/users', ['users', 'index']);

        $expected = [
            'get' => [
                '/users' => ['Users', 'index']
            ]
        ];

        // then we asset the route was registered
        $this->assertEquals($expected, $router->routes());
    }
}