<?php
class Year
{
    public array|int $years;

    public function accepts(array|int $years): self
    {
        $this->years = $years;
        return $this;
    }

    public function isLeapYear(int $year): bool
    {
        return $year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0);
    }

    public function checkLeapYear(): array|string
    {
        if (is_array($this->years)) {
            $results = [];
            foreach ($this->years as $year) {
                $results[] = $year . ($this->isLeapYear($year) ? " is a leap year" : " is not a leap year");
            }
            return $results;
        }
        return $this->years . ($this->isLeapYear($this->years) ? " is a leap year" : " is not a leap year");
    }
}

$years = new Year();
$results = $years->accepts([2021, 2022, 2023, 2024, 2025])->checkLeapYear();
$result = $years->accepts(2021)->checkLeapYear();
print_r($results);
print_r($result);