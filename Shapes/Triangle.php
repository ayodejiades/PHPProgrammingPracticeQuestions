<?php
require_once "./Interfaces/Shape.php";
class Triangle implements Shape
{
    private int $a;
    private int $b;
    private int $c;

    public function accepts($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        return $this;
    }

    public function calculateArea()
    {
        [$a, $b, $c] = [$this->a, $this->b, $this->c];
        $s = 0.5 * ($a + $b + $c);
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        return intval($area);
    }
    public function calculateVolume()
    {
        return "invalid";
    }

    public function displayArea()
    {
        echo "The area of a triangle with sides " . $this->a . ", " . $this->b . ", and " . $this->c . " is " . $this->calculateArea();
    }

    public function displayAreaAndVolume()
    {
        echo "The area of a triangle with sides " . $this->a . ", " . $this->b . ", and " . $this->c . " is " . $this->calculateArea() . " and the volume is " . $this->calculateVolume();
    }
}