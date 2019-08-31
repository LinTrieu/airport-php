<?php
declare(strict_types=1);

include ("weather.php");
include ("plane.php");

class Hanger
{
    const DEFAULT_CAPACITY = 20;

    function __construct(Weather $weather, $capacity = self::DEFAULT_CAPACITY)
    {
        $this->weather = $weather;
        $this->capacity = $capacity;
        $this->planes = [];
    }

    // TODO: fix the try catch exception error. the catch is not catching two throws per testing?
    function land(Plane $plane)
    {
        try {
            if ($this->isFull()) {
                throw new Exception ("Plane cannot land. Hanger is full");
            }
            elseif ($this->weather->isStormy())
            {
                throw new Exception("Plane cannot land due to stormy weather");
            }
            array_push($this->planes, $plane);
            return $this;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    // TODO: refactor so that a specific instance of Plane class has to be passed into takeoff method
    function takeoff(Plane $plane)
    {
        try
        {
            if ($this->isEmpty()) {
                throw new Exception ("No planes available. Hanger is empty");
            }
            if (($key = array_search($plane, $this->planes)) !== false)
            {
                unset($this->planes[$key]);
            }
            return $this;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    function isFull() :bool
    {
        return (count($this->planes) >= $this->capacity);
    }

    function isEmpty() :bool
    {
        return empty($this->planes);
    }
}

//$thursday = new Weather;
//$terminal_one = new Hanger($thursday, 2);
//$ryanair = new Plane;
//$easyjet = new Plane;
//$ba = new Plane;
//$terminal_one->land($ryanair);
//$terminal_one->land($easyjet);
//$terminal_one->takeoff($ryanair);
//var_dump('----------');
//print_r($terminal_one->planes);