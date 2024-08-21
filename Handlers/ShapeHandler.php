<?php
require_once "./Shapes/Circle.php";
require_once "./Shapes/Cone.php";
require_once "./Shapes/Cube.php";
require_once "./Shapes/Cylinder.php";
require_once "./Shapes/Rectangle.php";
require_once "./Shapes/Sphere.php";
require_once "./Shapes/Square.php";
require_once "./Shapes/Triangle.php";

class ShapeHandler
{
    private $circle;
    private $cone;
    private $cube;
    private $cylinder;
    private $rectangle;
    private $sphere;
    private $square;
    private $triangle;
    public function Circle()
    {
        $this->circle = new Circle();
        return $this->circle;
    }
    public function Cone()
    {
        $this->cone = new Cone();
        return $this->cone;
    }
    public function Cube()
    {
        $this->cube = new Cube();
        return $this->cube;
    }
    public function Cylinder()
    {
        $this->cylinder = new Cylinder();
        return $this->cylinder;
    }
    public function Rectangle()
    {
        $this->rectangle = new Rectangle();
        return $this->rectangle;
    }
    public function Sphere()
    {
        $this->sphere = new Sphere();
        return $this->sphere;
    }
    public function Square()
    {
        $this->square = new Square();
        return $this->square;
    }
    public function Triangle()
    {
        $this->triangle = new Triangle();
        return $this->triangle;
    }
}