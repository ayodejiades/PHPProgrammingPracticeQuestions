<?php

class Number
{
    public array|int $numbers;

    public function accepts($numbers): self
    {
        $this->numbers = $numbers;
        return $this;
    }

    public function isEvenOrOdd(int $number): bool
    {
        return $number % 2 == 0;
    }

    public function checkEvenOrOdd(): array|string
    {
        if (is_array($this->numbers)) {
            $results = [];
            foreach ($this->numbers as $number) {
                $results[] = $number . ($this->isEvenOrOdd($number) ? " is an even number" : " is an odd number");
            }
            return $results;
        }
        return $this->numbers . ($this->isEvenOrOdd($this->numbers) ? " is an even number" : " is an odd number");
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

    public function checkPrime(): array|string
    {
        if (is_array($this->numbers)) {
            $results = [];
            foreach ($this->numbers as $number) {
                $results[] = $number . ($this->isPrime($number) ? " is prime" : " is not prime");
            }
            return $results;
        }
        return $this->numbers . ($this->isPrime($this->numbers) ? " is prime" : " is not prime");
    }


    public function isAMultipleOf(int $number): bool
    {
        return $number % 3 === 0;
    }
    public function displayName()
    {
        if (is_array($this->numbers)) {
            $results = [];
            foreach ($this->numbers as $number) {
                $results[] = $this->isAMultipleOf($number) ? "Your Name" : "Backend";
            }
            return $results;
        }
        return $this->isAMultipleOf($this->numbers) ? "Your Name" : "Backend";
    }
}