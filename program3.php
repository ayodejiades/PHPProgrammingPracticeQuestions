<?php 
class Strings {
    public $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function isPalindrome() {
        $reversedString = strrev($this->string);
        if ($this->string === $reversedString) {
            return "{$this->string} is a palindrome";
        }
        return "{$this->string} is not a palindrome";
    }
}

$strings = [
    new Strings("racecar"),
    new Strings("madam"),
    new Strings("mamacita"),
    new Strings(")(()")
];

foreach ($strings as $string) {
    echo $string->isPalindrome() . "\n";
}