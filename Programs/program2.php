<?php
require_once "./Action/Handlers/ShapeHandler.php";
$shape1 = new ShapeHandler();
$shape1->Cone()->accepts(3, 4)->displayAreaAndVolume()."\n";

$shape2 = new ShapeHandler();
$shape2->Sphere()->accepts(6)->displayAreaAndVolume()."\n";