<?php

class Sphere
{
    public static $radius;

    public function __construct($radius)
    {
        self::$radius = $radius;
    }

    public static function area()
    {
        $area = 4 * pi() * self::$radius * self::$radius;
        return $area;
    }

    public static function volume()
    {
        $volume = 4 / 3 * pi() * self::$radius * self::$radius * self::$radius;
        return $volume;
    }

    public function result()
    {
        echo "The area of a sphere with radius " . self::$radius . " is " . $this->area() . " and the volume is " . $this->volume();
    }


}

class Cylinder
{
    public static $height;
    public static $radius;

    public function __construct($height, $radius)
    {
        self::$height = $height;
        self::$radius = $radius;
    }
    public function area()
    {
        $area = 2 * pi() * self::$radius * (self::$radius + self::$height);
        return $area;
    }

    public static function volume()
    {
        $volume = pi() * self::$radius * self::$radius * self::$height;
        return $volume;
    }

    public function result()
    {
        echo "The area of a cylinder with radius " . self::$radius . " and a height " . self::$height . " is " . $this->area() . " and the volume is " . $this->volume();
    }

}

class Cube
{
    public static $side;

    public function __construct($side)
    {
        self::$side = $side;
    }

    public static function area()
    {
        $area = 6 * self::$side * self::$side;
        return $area;
    }

    public static function volume()
    {
        $volume = self::$side * self::$side * self::$side;
    }

    public function result()
    {
        echo "The area of a cube with side " . self::$side . " is " . $this->area() . " and the volume is " . $this->volume();
    }
}

class Cone
{
    public static $height;
    public static $radius;

    public function __construct($height, $radius)
    {
        self::$height = $height;
        self::$radius = $radius;
    }
    public function area()
    {
        $l = sqrt((self::$radius) ** 2 + (self::$height) ** 2);
        $area = pi() * self::$radius * (self::$radius + $l);
        return $area;
    }

    public static function volume()
    {
        $volume = 1 / 3 * pi() * self::$radius * self::$radius * self::$height;
        return $volume;
    }

    public function result()
    {
        echo "The area of a cone with radius " . self::$radius . " and a height " . self::$height . " is " . $this->area() . " and the volume is " . $this->volume();
    }

}

$someCylinder = new Cylinder(3, 4);
$someCylinder->result() . "<br>";

$someCone = new Cone(3, 4);
$someCone->result() . "<br>";

$someSphere = new Sphere(4);
$someSphere->result() . "<br>";

$someCube = new Cube(4);
$someCube->result() . "<br>";