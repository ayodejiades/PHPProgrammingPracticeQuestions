<?php
class Year
{
    public $year;

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function isLeapYear()
    {
        if ($this->year % 4 === 0 || $this->year % 100 === 0 || $this->year % 400 === 0) {
            return $this->year . " is a leap year";
        }
        return $this->year . " is not a leap year";
    }
}


$years = [new Year(2000), new Year(2001), new Year(2002), new Year(2003), new Year(2004)];

foreach ($years as $year) {
    echo $year->isLeapYear() . "\n";
}