<?php
require_once("./Interfaces/Number.php");

$numbers = new Number();
$inputNumbers = $numbers->accepts([1, 2, 3, 4, 5]);

foreach ($inputNumbers as $number) {
    echo $number->displayName() . "\n";
}