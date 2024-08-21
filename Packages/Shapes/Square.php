<?php
require_once "./Packages/Interfaces/Shape.php";
class Square implements Shape
{
    public int $length;

    public function accepts($length)
    {
        $this->length = $length;
        return $this;
    }

    public function calculateArea()
    {
        $length = $this->length;
        $area = $length * $length;
        return intval($area);
    }
    public function calculateVolume()
    {
        return "invalid";
    }

    public function displayArea()
    {
        echo "The area of a square with side " . $this->length . " is " . $this->calculateArea();
    }
    public function displayAreaAndVolume()
    {
        echo "The area of a square with side " . $this->length . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}