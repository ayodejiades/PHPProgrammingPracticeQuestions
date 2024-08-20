<?php
require_once "./Interfaces/Shape.php";
class Circle implements Shape
{
    public int $radius;

    public function accepts($radius)
    {
        $this->radius = $radius;
        return $this;
    }

    public function calculateArea()
    {
        [$radius, $pi] = [$this->radius, pi()];
        $area = $pi * ($radius ** 2);
        return intval($area);
    }

    public function calculateVolume()
    {
    }
    public function displayArea()
    {
        [$radius, $res] = [$this->radius, $this->calculateArea()];
        echo "The area of a circle with radius " . $radius . " is " . $res;
    }
    public function displayAreaAndVolume(){}
}