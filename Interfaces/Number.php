<?php

class Number
{
    public array $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function isEvenOrOdd(int $number): bool
    {
        return $number % 2 == 0;
    }

    public function checkEvenOrOdd(): array
    {
        $results = [];
        foreach ($this->numbers as $number) {
            $results[] = $number . ($this->isEvenOrOdd($number) ? " is an even number" : " is an odd number");
        }
        return $results;
    }


    public function isPrime(int $number): bool
    {
        $res = true;
        if ($number <= 1) {
            $res = false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i === 0) {
                $res = false;
                break;
            } else {
                $res = true;
            }
        }
        return $res;
    }

    public function checkPrime(): array
    {
        $results = [];
        foreach ($this->numbers as $number) {
            $results[] = $number . ($this->isPrime($number) ? " is prime" : " is not prime");
        }
        return $results;
    }


    public function isAMultipleOf(int $number): bool
    {
        return $number % 3 === 0;
    }
    public function displayName()
    {
        $results = [];
        foreach ($this->numbers as $number) {
            $results[] = $this->isAMultipleOf($number) ? "Your Name" : "Backend";
        }
        return $results;
    }
}