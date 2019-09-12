<?php
// require or include - physically includes the contents of the other file e.g. require 'src/Calculator.php'
//instead use autoloader to find the namespace/class
use Airport\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testAddAnother()
    {
        $result = $this->calculator->add(1000,1000);
        $this->assertEquals(2000, $result);
    }
}