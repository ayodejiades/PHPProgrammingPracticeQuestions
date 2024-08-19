<?php

class Numbers
{
    public function __construct($number)
    {
        $this->number = $number;
    }

    public static function checkPrime($number)
    {
        $res = true;
        if ($number <= 1) {
            return "$number is not prime";
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i === 0) {
                $res = false;
                break;
            } else {
                $res = true;
            }
        }
        if (!$res) {
            return "$number is not prime";
        }
        return "$number is prime";
    }
}

echo Numbers::checkPrime(7);