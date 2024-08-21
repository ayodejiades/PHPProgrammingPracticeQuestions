<?php
require_once "./Shapes/Cylinder.php";
class Cone extends Cylinder
{
    public function calculateArea()
    {
        $slantHeight = sqrt(pow($this->radius, 2) + pow($this->height, 2));
        $area = pi() * $this->radius * ($this->radius + $slantHeight);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = (1 / 3) * pi() * pow($this->radius, 2) * $this->height;
        return intval($volume);
    }

    public function displayArea()
    {
        echo "The area of a cone with radius " . $this->radius . " and a height " . $this->height . " is " . $this->calculateArea();
    }

    public function displayAreaAndVolume()
    {
        echo "The area of a cone with radius " . $this->radius . " and a height " . $this->height . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}