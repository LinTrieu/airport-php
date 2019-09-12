<?php
use Airport\Plane;
use PHPUnit\Framework\TestCase;

class planeTest extends TestCase
{
    private $plane;

    public function testPlaneCanBeInstantiated()
    {
        $ba = new Plane();
        $this->assertInstanceOf(
            Plane::class,
            $ba
        );
    }
}