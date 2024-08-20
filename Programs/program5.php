<?php
require_once("./Interfaces/Number.php");

$numbers = new Number([1, 2, 3, 4, 5]);


foreach ($numbers->checkPrime() as $result) {
    echo $result . "\n";
}