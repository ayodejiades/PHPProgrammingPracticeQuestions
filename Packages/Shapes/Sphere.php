<?php
require_once "./Packages/Shapes/Circle.php";

class Sphere extends Circle
{

    public function calculateArea()
    {
        $area = 4 * pi() * ($this->radius ** 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = 4 / 3 * pi() * ($this->radius ** 3);
        return intval($volume);
    }
    public function displayArea()
    {
        echo "The area of a sphere with radius " . $this->radius . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        echo "The area of a sphere with radius " . $this->radius . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}