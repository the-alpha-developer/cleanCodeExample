<?php

declare(strict_types=1);

namespace Tests;

use Alpha\CleanCode\Car;
use Alpha\CleanCode\Engine;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery\MockInterface;

class CarTest extends MockeryTestCase
{
    public function testCarStart()
    {
        /** @var MockInterface|Engine $engineMock */
        $engineMock = Mockery::mock(Engine::class);
        $engineMock->expects()->canStart()->andReturn(true);

        $car = new Car($engineMock);

        $this->assertTrue($car->starts());
    }
}
