<?php
include ("weather.php");
include ("plane.php");

class Hanger
{
    const DEFAULT_CAPACITY = 20;

    function __construct($weather, $capacity = self::DEFAULT_CAPACITY)
    {
        $this->weather = new Weather;
        $this->capacity = $capacity;
        $this->planes = [];
    }

    function land(Plane $plane)
    {
        try {
            if ($this->isFull()) {
                throw new Exception ("Airport hanger is full");
            }
            array_push($this->planes, $plane);
            return $this;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
//            throw $e;
        }
    }

    //        throw new Exception("Plane cannot land due to stormy weather");

    function planeTakeoff()
    {

    }

    function isFull()
    {
        return false;
    }

    function isEmpty()
    {

    }
}

//$terminal_one = new Hanger("sunny");
//$ryanair = new Plane;
//$easyjet = new Plane;
//$terminal_one->land($ryanair);
//$terminal_one->land($easyjet);
////var_dump($terminal_one->planes);
//var_dump("\n ----------");