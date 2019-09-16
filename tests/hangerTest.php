<?php
use Airport\Hanger;
use Airport\Weather;
use PHPUnit\Framework\TestCase;

class hangerTest extends TestCase
{
    public function testHangerCanBeInstantiated()
    {
        $monday = new Weather();
        $terminal_one = new Hanger($monday, 2 );
        $this->assertInstanceOf(Hanger::class, $terminal_one);
    }

    public function testHangerIsFullAtCapacity()
    {}

    public function testHangerIsEmptyWhenNoPlanes()
    {}
}