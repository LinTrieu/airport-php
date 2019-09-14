<?php
declare(strict_types=1);

namespace Airport;

class Hanger
{
    const DEFAULT_CAPACITY = 10;

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
