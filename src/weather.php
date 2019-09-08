<?php
declare(strict_types=1);

namespace Airport;

class Weather
{
    private $forecast;

    public function __construct()
    {
        $this->forecast = "sunny";
    }

    function random_outlook() :string
    {
        $outlook = array("stormy", "sunny", "sunny", "sunny");
        $rand_index = array_rand($outlook);
        $this->forecast = $outlook[$rand_index];
        return $this->forecast;
    }

    function isStormy() :bool
    {
        return ($this->forecast === "stormy");
    }
}
//
//$monday = new Weather;
//$monday->isStormy();
//
