<?php
declare(strict_types=1);

class Weather
{
    private $forecast;

    public function __construct()
    {
        $this->forecast = "sunny";
    }

    function random_outlook() :string
    {
        $outlook = array("stormy", "stormy", "sunny", "sunny");
        $rand_index = array_rand($outlook);
        $this->forecast = $outlook[$rand_index];
        return $this->forecast;
    }

    function isStormy() :bool
    {
        echo "Weather Forecast: " . $this->random_outlook() . "\n";
        if ($this->forecast === "stormy")
        {
            return true;
        }
        else
        {
            return false;
        };
    }
}

$monday = new Weather;
$monday->isStormy();

