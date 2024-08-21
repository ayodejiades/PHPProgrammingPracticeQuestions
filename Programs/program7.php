<?php
require_once "./Packages/Classes/Number.php";

$numbers = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->displayName();
$result = $numbers->accepts(1)->displayName();
print_r($results);
print_r($result);