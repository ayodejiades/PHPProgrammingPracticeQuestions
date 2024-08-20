<?php
require_once "./Shapes/Circle.php";

class Sphere extends Circle
{

    public function calculateArea()
    {
        [$radius, $pi] = [$this->radius, pi()];
        $area = 4 * $pi * ($radius ** 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        [$radius, $pi] = [$this->radius, pi()];
        $volume = 4 / 3 * $pi * ($radius ** 3);
        return intval($volume);
    }
    public function displayAreaAndVolume()
    {
        [$radius, $res1, $res2] = [$this->radius, $this->calculateArea(), $this->calculateVolume()];
        echo "The area of a sphere with radius " . $radius . " is " . $res1 . " and the volume is " . $res2;
    }
}