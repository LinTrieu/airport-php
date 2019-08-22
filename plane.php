<?php
declare(strict_types=1);

class Plane
{
    function testing() :string
    {
        return "Hello, this is the Plane class talking!";
    }

    function isWorking() :bool
    {
        return true;
    }
}

//echo Plane::testing();
//echo Plane::isWorking();