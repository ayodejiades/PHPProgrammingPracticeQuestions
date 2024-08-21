<?php
require_once "./Handlers/ShapeHandler.php";
$shape1 = new ShapeHandler();
$shape1->Square()->accepts(6)->displayArea()."\n";

$shape2 = new ShapeHandler();
$shape2->Triangle()->accepts(1, 2, 3)->displayArea()."\n";