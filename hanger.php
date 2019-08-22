<?php
include ("weather.php");

class Hanger
{
    const DEFAULT_CAPACITY = 20;

    function __construct($weather, $capacity = self::DEFAULT_CAPACITY)
    {
        $this->weather = $weather;
        $this->capacity = $capacity;
        $this->planes = array();
    }

    function land($plane)
    {

        array_push($this->planes, $plane);
//        throw new Exception("Plane cannot land due to stormy weather");
    }

    function planeTakeoff()
    {

    }

    function isFull()
    {

    }

    function isEmpty()
    {

    }
}