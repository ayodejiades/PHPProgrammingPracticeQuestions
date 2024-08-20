<?php
require_once "./Shapes/Circle.php";
require_once "./Shapes/Rectangle.php";
require_once "./Shapes/Square.php";
require_once "./Shapes/Triangle.php";

$someCircle = new Circle();
echo $someCircle->accepts(6)->displayArea() . "<br>";

$someTriangle = new Triangle();
echo $someTriangle->accepts(1, 2, 3)->displayArea() . "<br>";

$someSquare = new Square();
echo $someSquare->accepts(6)->displayArea() . "<br>";

$someRectangle = new Rectangle();
echo $someRectangle->accepts(2, 3)->displayArea() . "<br>";