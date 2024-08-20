<?php
class Year
{
    public array $years;

    public function __construct(array $years)
    {
        $this->years = $years;
    }

    public function isLeapYear(int $year): bool
    {
        return ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0));
    }

    public function checkLeapYears(): array
    {
        $results = [];
        foreach ($this->years as $year) {
            $results[] = $year . ($this->isLeapYear($year) ? " is a leap year" : " is not a leap year");
        }
        return $results;
    }
}

$years = new Year([2000, 2001, 2002, 2003, 2004]);

foreach ($years->checkLeapYears() as $result) {
    echo $result . "\n";
}