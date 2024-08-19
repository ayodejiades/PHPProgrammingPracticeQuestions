# PHP Programming Practice Questions

This repository contains my solutions to the following problems:

## Question 1

Write a program to calculate the area of the following shapes:

- Triangle
- Rectangles
- Circle
- Square

Create variables for the necessary dimensions.  Assign values to the dimensions.  

Print out the result in this template  “The area of a circle with radius 4 is 29”.

My Solution: [Program 1](./program1.php)

## Question 2

Write a program to calculate the area and volume of the following shapes:

- Sphere
- Cylinder
- Cube
- Cone

Create variables for the necessary dimensions.  Assign values to the dimensions.

Print out the result in this template “The area of a sphere with radius 4 is 29 and the volume of a sphere with radius 4 is 47”.

My Solution: [Program 2](./program2.php)

## Question 3

Write a program to determine if a given string is a palindrome.

My Solution: [Program 3](./program3.php)

## Question 4

Write a program to determine if a number is even or odd.

My Solution: [Program 4](./program4.php)

## Question 5

Write a program to determine if a number is a prime number or not.

My Solution: [Program 5](./program5.php)

## Question 6

Write a program to determine if a year is a leap year or not.

My Solution: [Program 6](./program6.php)

## Question 7

Write a program that receives a number from a user and displays “Your Name” if it is a multiple of 3, and “Backend” if it is not a multiple of 3

My Solution: [Program 7](./program7.php)

## Language Used

PHP

## Solution Installation

Clone this repository: `git clone https://github.com/ayodejiades/PHPProgrammingPracticeQuestions.git`

Then, run on your local device.

## Examples

The following are numerous examples of how to use the programs listed above:

### Program 1

```[php]
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

```

## Program 2

```[php]
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

```

## Program 3

```[php]
<?php 
class Strings {
    public $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function isPalindrome() {
        $reversedString = strrev($this->string);
        if ($this->string === $reversedString) {
            return "{$this->string} is a palindrome";
        }
        return "{$this->string} is not a palindrome";
    }
}

$strings = [
    new Strings("racecar"),
    new Strings("madam"),
    new Strings("mamacita"),
    new Strings(")(()")
];

foreach ($strings as $string) {
    echo $string->isPalindrome() . "\n";
}

```

## Program 4

```[php]

<?php
require_once("./Number.php");

$numbers = [new Number(0), new Number(1), new Number(2), new Number(3)];

foreach ($numbers as $number) {
    echo $number->isEvenOrOdd() . "\n";
}

```

## Program 5

```[php]

<?php
require_once("./Number.php");

$numbers = [new Number(0), new Number(1), new Number(2), new Number(3)];

foreach ($numbers as $number) {
    echo $number->checkPrime() . "\n";
}

```

## Program 6

```[php]
<?php
class Year
{
    public $year;

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function isLeapYear()
    {
        if ($this->year % 4 === 0 || $this->year % 100 === 0 || $this->year % 400 === 0) {
            return $this->year . " is a leap year";
        }
        return $this->year . " is not a leap year";
    }
}


$years = [new Year(2000), new Year(2001), new Year(2002), new Year(2003), new Year(2004)];

foreach ($years as $year) {
    echo $year->isLeapYear() . "\n";
}

```

## Program 7

```[php]
<?php
require_once("./Number.php");

$numbers = [new Number(0), new Number(1), new Number(2), new Number(3)];

foreach ($numbers as $number) {
    echo $number->displayName() . "\n";
}
```

 Thank you, and I hope you enjoy the code!
