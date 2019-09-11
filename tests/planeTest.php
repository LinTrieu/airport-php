<?php

namespace Airport;

use PHPUnit\Framework\TestCase;

class planeTest extends TestCase
{
    function testPlaneReturnsTrue()
    {
        $this->assertInstanceOf(
            Plane::class,
            Plane::isWorking()
        );
    }
}