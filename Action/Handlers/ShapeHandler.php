<?php
require_once "./Packages/Shapes/Circle.php";
require_once "./Packages/Shapes/Cone.php";
require_once "./Packages/Shapes/Cube.php";
require_once "./Packages/Shapes/Cylinder.php";
require_once "./Packages/Shapes/Rectangle.php";
require_once "./Packages/Shapes/Sphere.php";
require_once "./Packages/Shapes/Square.php";
require_once "./Packages/Shapes/Triangle.php";

class ShapeHandler
{
    public function Circle()
    {
        return new Circle();
    }
    public function Cone()
    {
        return new Cone();
    }
    public function Cube()
    {
        return new Cube();
    }
    public function Cylinder()
    {
        return new Cylinder();
    }
    public function Rectangle()
    {
        return new Rectangle();
    }
    public function Sphere()
    {
        return new Sphere();
    }
    public function Square()
    {
        return new Square();
    }
    public function Triangle()
    {
        return new Triangle();
    }
}