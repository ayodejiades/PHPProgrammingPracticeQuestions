<?php

class IsEvenOrOdd
{
    public static $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public static function isEvenOrOdd($number)
    {
        if ($number % 2 == 0) {
            return "The number " . $number . " is even";
        }
        return "The number " . $number . " is odd";
    }
}

echo IsEvenOrOdd::isEvenOrOdd(4);