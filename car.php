<?php


class car
{
    public function __construct($make, $year) {
        $this->make = $make;
        $this->year = $year;
    }

    public function print_details() {
        echo "This car model is a " . $this->year . " " . $this->make . ".\n";
    }
}

$car = new Car("Toyota Yaris", 2006);
$car->print_details();