<?php
class Year
{
    public array $years;

    public function __construct($years)
    {
       $this->years = $years;
    }

    public function isLeapYear()
    {
        foreach ($this->years as $year) {
            if ($year % 4 === 0 || $year % 100 === 0 || $year % 400 === 0) {
                return $year . " is a leap year";
            }
            return $year . " is not a leap year";
        }
    }
}


$years = new Year([2000, 2001, 2002, 2003, 2004]);

foreach ($years as $year) {
    echo $year->isLeapYear() . "\n";
}