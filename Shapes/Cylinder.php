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
        [$radius, $pi, $height] = [$this->radius, pi(), $this->height];
        $area = 2 * $pi * $radius * ($radius + $height);
        return intval($area);
    }

    public function calculateVolume()
    {
        [$radius, $pi, $height] = [$this->radius, pi(), $this->height];
        $volume = $pi * ($radius ** 2) * $height;
        return intval($volume);
    }

    public function displayArea(){}
    public function displayAreaAndVolume()
    {
        [$radius, $height, $res1, $res2] = [$this->radius, $this->height, $this->calculateArea(), $this->calculateVolume()];
        return "The area of a cylinder with radius " . $this->radius . " and a height " . $this->height . " is " . $res1 . " and the volume is " . $res2;
    }
}