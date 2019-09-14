<?php
use Airport\Weather;
use PHPUnit\Framework\TestCase;

class weatherTest extends TestCase
{
//    protected function setUp()
//    {
//    }
//
//    public function tearDown()
//    {
//    }

    public function testWeatherCanBeInstantiated()
    {
        $monday_outlook = new Weather();
        $this->assertInstanceOf(Weather::class, $monday_outlook);
    }


//    public function testWeatherHasAForecast()
//    {
//        $monday = new Weather();
//        $this->assert($monday->forecast());
//    }

//    public function testWeatherRandomOutlookReturnsSunnyOrStormy()
//    {
//    }
//
//    public function testIsStormyReturnsTrueWhenStormy()
//    {
//    }
//
//    public function testIsStormyReturnsFalseWhenSunny()
//    {
//    }
}