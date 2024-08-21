<?php
require_once "./Interfaces/Shape.php";
class Cylinder implements Shape
{

    public int $radius;
    public int $height;
    public function accepts(int $height, int $radius)
    {
        $this->height = $height;
        $this->radius = $radius;
        return $this;
    }

    public function calculateArea()
    {
        $area = 2 * pi() * $this->radius * ($this->radius + $this->height);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = pi() * pow($this->radius, 2) * $this->height;
        return intval($volume);
    }

    public function displayArea()
    {
        return "The area of a cylinder with radius " . $this->radius . " and a height " . $this->height . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        return "The area of a cylinder with radius " . $this->radius . " and a height " . $this->height . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}