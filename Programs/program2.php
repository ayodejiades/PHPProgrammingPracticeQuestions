<?php
require_once "./Action/Handlers/ShapeHandler.php";
$shapeHandler = new ShapeHandler();
$shapeHandler->Cone()->accepts(3, 4)->displayAreaAndVolume();
$shapeHandler->Sphere()->accepts(6)->displayAreaAndVolume();