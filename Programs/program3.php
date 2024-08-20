<?php
class Strings
{
    public array $strings;

    public function __construct(array $strings)
    {
        $this->strings = $strings;
    }

    public function isPalindrome(string $string): bool
    {
        $reversedString = strrev($string);
        return ($string === $reversedString);
    }
    public function checkPalindrome(): array
    {
        $results = [];
        foreach ($this->strings as $string) {
            $results[] = $string . ($this->isPalindrome($string) ? " is a palindrome" : " is not a leap year");
        }
        return $results;
    }
}

$strings = new Strings(["mamacita", ")(()"]);
 
foreach($strings->checkPalindrome() as $result){
    echo $result. "\n";
}
