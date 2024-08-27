<?php
require_once "./Packages/Classes/Year.php";

$years = new Year();
$results = $years->accepts([2021, 2022, 2023, 2024, 2025])->checkLeapYear();
$result = $years->accepts(2021)->checkLeapYear();
print_r($results);
print_r($result);