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
//            throw $e;
        }
    }

    // TODO: refactor so that a specific instance object of the Plane class has to be passed into planeTakeoff method
    // as a parameter
    // E.G. takeoff(Plane $plane)
    function planeTakeoff()
    {
        try {
            if ($this->isEmpty())
            {
                throw new Exception ("No planes available. Hanger is empty");
            }
            array_pop($this->planes);
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
//
//        if (count($this->planes) >= $this->capacity) {
//            return true;
//        } else
//        {
//            return false;
//        }
    }

    function isEmpty() :bool
    {
        return empty($this->planes);

//        if (empty($this->planes))
//        {
//            return true;
//        }
//        else
//        {
//            return false;
//        }
    }
}

//$terminal_one = new Hanger("sunny");
//$ryanair = new Plane;
//$easyjet = new Plane;
//$terminal_one->land($ryanair);
//$terminal_one->land($easyjet);
////var_dump($terminal_one->planes);
//var_dump("\n ----------");