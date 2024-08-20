<?php

class Number
{
    public $number;

    public function accepts($number)
    {
        $this->number = $number;
        return $this;
    }

    public function isEvenOrOdd()
    {
        if ($this->number % 2 == 0) {
            return "The number " . $this->number . " is even" . "<br>";
        }
        return "The number " . $this->number . " is odd" . "<br>";
    }

    public function checkPrime()
    {
        $res = true;
        if ($this->number <= 1) {
            return "$this->number is not prime" . "<br>";
        }
        for ($i = 2; $i * $i <= $this->number; $i++) {
            if ($this->number % $i === 0) {
                $res = false;
                break;
            } else {
                $res = true;
            }
        }
        if (!$res) {
            return "$this->number is not prime" . "<br>";
        }
        return "$this->number is prime" . "<br>";
    }

    public function displayName()
    {
        if ($this->number % 3 == 0) {
            return "Your Name";
        }
        return "Backend";
    }

}