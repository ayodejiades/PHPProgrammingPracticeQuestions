<?php
require_once("./Number.php");

$numbers = [new Number(0), new Number(1), new Number(2), new Number(3)];

foreach ($numbers as $number) {
    echo $number->DisplayName() . "\n";
}