<?php
require_once "./Shapes/Square.php";
class Cube extends Square
{
    public function calculateArea()
    {
        $length = $this->length;
        $area = 6 * $length * $length;
        return intval($area);
    }

    public function calculateVolume()
    {
        $length = $this->length;
        $volume = $length * $length * $length;
        return intval($volume);
    }
    public function displayAreaAndVolume()
    {
        [$length, $res1, $res2] = [$this->length, $this->calculateArea(), $this->calculateVolume()];
        echo "The area of a cube with side length " . $length . " is " . $res1 . " and the volume is " . $res2;
    }
}