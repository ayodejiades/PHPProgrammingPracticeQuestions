<?php
require_once "./Shapes/Square.php";
class Cube extends Square
{
    public function calculateArea()
    {
        $area = 6 * pow($this->length, 2);
        return intval($area);
    }

    public function calculateVolume()
    {
        $volume = pow($this->length, 3);
        return intval($volume);
    }

    public function displayArea()
    {
        echo "The area of a cube with side length " . $this->length . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        echo "The area of a cube with side length " . $this->length . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}