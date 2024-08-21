<?php
require_once "./Interfaces/Shape.php";
class Rectangle implements Shape
{
    private int $length;
    private int $breadth;

    public function accepts($length, $breadth)
    {
        $this->length = $length;
        $this->breadth = $breadth;
        return $this;
    }

    public function calculateArea()
    {
        $area = $this->length * $this->breadth;
        return $area;
    }

    public function calculateVolume()
    {
        return "invalid";
    }

    public function displayArea()
    {
        echo "The area of a rectangle with sides " . $this->length . ", and " . $this->breadth . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        echo "The area of a rectangle with sides " . $this->length . ", and " . $this->breadth . " is " . $this->calculateArea() . "and the volume is " . $this->calculateVolume();
    }
}