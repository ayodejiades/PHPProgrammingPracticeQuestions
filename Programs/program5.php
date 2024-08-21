<?php
require_once "./Packages/Classes/Number.php";

$numbers = new Number();
$number1 = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->checkPrime();
$result1 = $number1->accepts(1)->checkPrime();
print_r($results);
print_r($result1);