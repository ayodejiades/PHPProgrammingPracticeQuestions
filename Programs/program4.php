<?php
require_once "./Packages/Classes/Number.php";

$numbers = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->checkEvenOrOdd();
$result = $numbers->accepts(1)->checkEvenOrOdd();
print_r($results);
print_r($result);