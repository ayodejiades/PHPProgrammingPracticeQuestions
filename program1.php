<?php

class Triangle
{
    public static $a;
    public static $b;
    public static $c;

    public function __construct($a, $b, $c)
    {
        self::$a = $a;
        self::$b = $b;
        self::$c = $c;
    }

    public static function area()
    {
        $s = 0.5 * (self::$a + self::$b + self::$c);
        $area = sqrt($s * ($s - self::$a) * ($s - self::$b) * ($s - self::$c));
        return "The area of a triangle with sides " . self::$a . ", " . self::$b . ", and " . self::$c . " is $area";
    }
}

class Rectangle
{
    public static $length;
    public static $breadth;

    public function __construct($length, $breadth)
    {
        self::$length = $length;
        self::$breadth = $breadth;
    }

    public static function area()
    {
        $area = self::$length * self::$breadth;
        return "The area of a rectangle with a length " . self::$length . " and a breadth " . self::$breadth . " is " . $area;
    }
}
class Circle
{
    public static $radius;

    public function __construct($radius)
    {
        self::$radius = $radius;
    }

    public static function area()
    {
        $area = pi() * self::$radius * self::$radius;
        return "The area of a circle with " . self::$radius . " is " . $area;
    }
}

class Square
{
    public static $length;

    public function __construct($length)
    {
        self::$length = $length;
    }

    public static function area()
    {
        $area = self::$length * self::$length;
        return "The area of a square with side " . self::$length . " is " . $area;
    }
}

$someSquare = new Square(3);
echo $someSquare::area() . "<br>";

$someRectangle = new Rectangle(3, 4);
echo $someRectangle::area() . "<br>";

$someCircle = new Circle(4);
echo $someCircle::area() . "<br>";

$someTriangle = new triangle(3, 4, 5);
echo $someTriangle::area() . "<br>";