<?php
require_once "./Shapes/Cylinder.php";
class Cone extends Cylinder
{
    public function calculateArea()
    {
        [$radius, $pi, $height] = [$this->radius, pi(), $this->height];
        $slantHeight = sqrt(($radius ** 2) + ($height ** 2));
        $area = $pi * $radius * ($radius + $slantHeight);
        return intval($area);
    }

    public function calculateVolume()
    {
        [$radius, $pi, $height] = [$this->radius, pi(), $this->height];
        $volume = 1 / 3 * $pi * ($radius ** 2) * $height;
        return intval($volume);
    }

    public function displayAreaAndVolume()
    {
        [$radius, $height, $res1, $res2] = [$this->radius, $this->height, $this->calculateArea(), $this->calculateVolume()];
        echo "The area of a cone with radius " . $this->radius . " and a height " . $this->height . " is " . $res1 . " and the volume is " . $res2;
    }
}