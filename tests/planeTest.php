<?php
use Airport\Plane;
use PHPUnit\Framework\TestCase;

class planeTest extends TestCase
{
    private $ba;
    private $ryanair;

    public function testPlaneCanBeInstantiated()
    {
        $ba = new Plane();
        $this->assertInstanceOf(Plane::class, $ba);
    }

    public function testPlaneIsWorkingReturnsTrue()
    {
        $ryanair = new Plane();
        $this->assertTrue($ryanair->isWorking());
    }
}