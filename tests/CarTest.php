<?php

declare(strict_types=1);

namespace Tests;

use Alpha\CleanCode\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testCarStart()
    {
        $car = new Car();

        $this->assertTrue($car->starts());
    }
}
