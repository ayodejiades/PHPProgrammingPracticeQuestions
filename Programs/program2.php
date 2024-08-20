<?php
require_once "./Shapes/Cone.php";
require_once "./Shapes/Cube.php";
require_once "./Shapes/Cylinder.php";
require_once "./Shapes/Sphere.php";

$someCone = new Cone();
echo $someCone->accepts(2, 3)->displayAreaAndVolume() . "<br>";

$someCube = new Cube();
echo $someCube->accepts(2)->displayAreaAndVolume() . "<br>";

$someCylinder = new Cylinder();
echo $someCylinder->accepts(2, 3)->displayAreaAndVolume() . "<br>";

$someSphere = new Sphere();
echo $someSphere->accepts(2)->displayAreaAndVolume() . "<br>";