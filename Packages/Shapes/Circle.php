<?php
require_once "./Packages/Interfaces/Shape.php";
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
        $area = pi() * pow($this->radius, 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        return "invalid";
    }
    public function displayArea()
    {
        echo "The area of a circle with radius " . $this->radius . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        echo "The area of a circle with radius " . $this->radius . " is " . $this->calculateArea() . " and the volume is" . $this->calculateVolume();
    }
}