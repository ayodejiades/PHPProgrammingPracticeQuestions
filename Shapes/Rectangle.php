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
        [$length, $breadth] = [$this->length, $this->breadth];
        $area = $length * $breadth;
        return $area;
    }

    public function calculateVolume(){}

    public function displayArea()
    {
        [$length, $breadth, $res] = [$this->length, $this->breadth, $this->calculateArea()];
        echo "The area of a rectangle with sides " . $length . ", and " . $breadth . " is " . $res;
    }
    public function displayAreaAndVolume(){}
}