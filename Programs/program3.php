<?php 
class Strings {
    public $string;

    public function __construct($strings = []) {
        foreach ($strings as $string) {
             $this->string = $string;
        }
    }

    public function isPalindrome() {
        $reversedString = strrev($this->string);
        if ($this->string === $reversedString) {
            return "{$this->string} is a palindrome";
        }
        return "{$this->string} is not a palindrome";
    }
}

$strings = new Strings(["mamacita", ")(()"]);
echo $strings->isPalindrome();
