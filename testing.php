<?php
declare(strict_types=1);

require_once "vendor/autoload.php";
use Airport\Weather;
use Airport\Plane;
use Airport\Hanger;

$thursday = new Weather;
$terminal_one = new Hanger($thursday, 2);
$ryanair = new Plane;
$easyjet = new Plane;
$ba = new Plane;
$terminal_one->land($ryanair);
$terminal_one->land($easyjet);
$terminal_one->takeoff($ryanair);
var_dump('Woohoo, this works!');
print_r($terminal_one->planes);