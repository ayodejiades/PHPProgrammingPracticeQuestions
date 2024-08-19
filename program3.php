<?php 
class Strings{
    public function __construct($string){
        $this->string = $string;
    }

    public function IsPalindrome($string){
        for($i = 0; $i < strlen($string) - 1; $i++){
            $reversedString = strrev($string);
            if($string [$i] === $reversedString[$i]){
                return "$string is a palindrome";
            }
            return "$string is not a palindrome";
        }
    }
}