# PHP Programming Practice Questions

This repository contains my solutions to the following problems:

## Question 1

Write a program to calculate the area of the following shapes:

- Triangle
- Rectangles
- Circle
- Square

Create variables for the necessary dimensions.  Assign values to the dimensions.  

Print out the result in this template  “The area of a circle with radius 4 is 29”.

My Solution: [Program 1](./Programs/program1.php)

## Question 2

Write a program to calculate the area and volume of the following shapes:

- Sphere
- Cylinder
- Cube
- Cone

Create variables for the necessary dimensions.  Assign values to the dimensions.

Print out the result in this template “The area of a sphere with radius 4 is 29 and the volume of a sphere with radius 4 is 47”.

My Solution: [Program 2](./Programs/program2.php)

## Question 3

Write a program to determine if a given string is a palindrome.

My Solution: [Program 3](./Programs/program3.php)

## Question 4

Write a program to determine if a number is even or odd.

My Solution: [Program 4](./Programs/program4.php)

## Question 5

Write a program to determine if a number is a prime number or not.

My Solution: [Program 5](./Programs/program5.php)

## Question 6

Write a program to determine if a year is a leap year or not.

My Solution: [Program 6](./Programs/program6.php)

## Question 7

Write a program that receives a number from a user and displays “Your Name” if it is a multiple of 3, and “Backend” if it is not a multiple of 3

My Solution: [Program 7](./Programs/program7.php)

## Language Used

PHP

## Solution Installation

Clone this repository: `git clone https://github.com/ayodejiades/PHPProgrammingPracticeQuestions.git`

Then, run on your local device.

## Examples

The following are numerous examples of how to use the programs listed above:

### Program 1

```php
<?php
$shape1 = new ShapeHandler();
$shape1->Square()->accepts(6)->displayAreaAndVolume()."\n";

$shape2 = new ShapeHandler();
$shape2->Triangle()->accepts(1,2,3)->displayArea();
```

## Program 2

```php
<?php
$shape1 = new ShapeHandler();
$shape1->Cone()->accepts(3, 4)->displayAreaAndVolume() . "\n";

$shape2 = new ShapeHandler();
$shape2->Sphere()->accepts(6)->displayAreaAndVolume() . "\n";
```

## Program 3

```php
<?php 
$sentence1 = new Sentence();
echo $sentence1->accepts("mamacita")->checkPalindrome();
```

## Program 4

```php
<?php
$numbers = new Number();
$number1 = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->checkEvenOrOdd();
$result1 = $number1->accepts(1)->checkEvenOrOdd();
print_r($results);
print_r($result1);
```

## Program 5

```php
<?php

$numbers = new Number();
$number1 = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->checkPrime();
$result1 = $number1->accepts(1)->checkPrime();
print_r($results);
print_r($result1);
```

## Program 6

```php
<?php
$years = new Year();
$year1 = new Year();
$results = $years->accepts([2021, 2022, 2023, 2024, 2025])->checkLeapYear();
$result1 = $year1->accepts(2021)->checkLeapYear();
print_r($results);
print_r($result1);
```

## Program 7

```php
<?php
$numbers = new Number();
$number1 = new Number();
$results = $numbers->accepts([1, 2, 3, 4, 5])->displayName();
$result1 = $number1->accepts(1)->displayName();
print_r($results);
print_r($result1);
```

 Thank you, and I hope you enjoy the code!
