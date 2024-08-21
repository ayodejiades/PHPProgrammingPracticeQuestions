<?php
require_once "./Action/Handlers/ShapeHandler.php";
$shapeHandler = new ShapeHandler();
$shapeHandler->Square()->accepts(6)->displayArea();
$shapeHandler->Triangle()->accepts(1,2,3)->displayArea();