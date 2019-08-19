<?php
declare(strict_types=1);

class Weather
{
    function __construct()
    {

    }

    function random_outlook()
    {
        $outlook = array("stormy", "sunny", "sunny", "stormy");
        $rand_index = array_rand($outlook);
        return $outlook[$rand_index];
    }

    function stormy()
    {

    }
}

echo Weather::random_outlook();