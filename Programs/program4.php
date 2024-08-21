<?php
require_once("./Interfaces/Number.php");

$numbers = new Number();
$number1 = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->checkEvenOrOdd();
$result1 = $number1->accepts(1)->checkEvenOrOdd();
print_r($results);
print_r($result1);