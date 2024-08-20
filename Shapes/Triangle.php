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
    }

    public function displayArea()
    {
        [$a, $b, $c, $res] = [$this->a, $this->b, $this->c, $this->calculateArea()];
        echo "The area of a triangle with sides " . $a . ", " . $b . ", and " . $c . " is " . $res;
    }

    public function displayAreaAndVolume(){}
}