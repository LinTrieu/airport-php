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
        $outlook = array("stormy", "sunny", "sunny", "sunny");
        $rand_index = array_rand($outlook);
        $this->forecast = $outlook[$rand_index];
        return $this->forecast;
    }

    function isStormy() :bool
    {
        echo "The weather outlook is: " . $this->random_outlook() . "\n";
        return ($this->forecast === "stormy");
//        if ($this->forecast === "stormy")
//        {
//            return true;
//        }
//        else
//        {
//            return false;
//        };
    }
}
//
//$monday = new Weather;
//$monday->isStormy();
//
