<?php
class Year
{
    public $year;

    public function __construct($year)
    {
        $this->year = $year;
    }

    public static function IsLeapYear($year)
    {
        if ($year % 4 === 0 || $year % 100 === 0 || $year % 400 === 0) {
            return "$year is a leap year";
        }
        return "$year is not a leap year";
    }
}

echo Year::IsLeapYear(2000);