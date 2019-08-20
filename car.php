<?php

class car
{
    private $non_static_member = 1;
    private static $static_member = 2;

    public function __construct($make, $year) {
        $this->make = $make;
        $this->year = $year;
        echo $this->non_static_member . " " .
            self::$static_member . "\n";
    }

    public function print_details() {
        echo "This car model is a " . $this->year . " " . $this->make . ".\n";
    }
}

$car = new Car("Toyota Yaris", 2006);
$car->print_details();