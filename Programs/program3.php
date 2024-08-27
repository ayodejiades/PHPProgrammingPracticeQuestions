<?php
require_once "./Packages/Classes/Sentence.php";

$sentence = new Sentence();
echo $sentence->accepts("mamacita")->checkPalindrome();
print_r($sentence->accepts(["mamacita", "madam", ")(()", "binta", "olamide", "racecar"])->checkPalindrome());