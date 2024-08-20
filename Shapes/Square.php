<?php
require_once "./Interfaces/Shape.php";
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
    public function calculateVolume(){}
    
    public function displayArea()
    {
        [$length, $res] = [$this->length, $this->calculateArea()];
        echo "The area of a square with side " . $length . " is " . $res;
    }
    public function displayAreaAndVolume(){}
}