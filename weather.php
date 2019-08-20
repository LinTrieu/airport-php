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

//    function stormy() :bool
//    {
//        $this->random_outlook();
//        if (self::forecast === "stormy")
//        {
//            return true;
//        }
//    }
}
$monday = new Weather;
echo $monday->random_outlook();