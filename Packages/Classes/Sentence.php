<?php
class Sentence
{
    public array | string $sentences;

    public function accepts(string|array $sentences): self
    {
        $this->sentences = $sentences;
        return $this;
    }

    public function isPalindrome(string $sentence): bool
    {
        $reversedSentence = strrev($sentence);
        return $sentence === $reversedSentence;
    }

    public function checkPalindrome(): array|string
    {
        if (is_array($this->sentences)) {
            $results = [];
            foreach ($this->sentences as $sentence) {
                $results[] = $sentence . ($this->isPalindrome($sentence) ? " is a palindrome" : " is not a palindrome");
            }
            return $results;
        }
        return $this->sentences . ($this->isPalindrome($this->sentences) ? " is a palindrome" : " is not a palindrome");
    }
}