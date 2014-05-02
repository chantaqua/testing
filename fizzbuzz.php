<?php
/**
 * Created by PhpStorm.
 * User: Alice
 * Date: 4/30/14
 * Time: 8:02 PM
 */

function fizzbuzz($number)
{
    for ($i = 1; $i <= $number; $i++) {
        printNumberIfNotFizzOrBuzz($i);
        printFizzWhenDivisibleByThree($i);
        printBuzzWhenDivisibleByFive($i);
        print "\n";
    }
}

function printNumberIfNotFizzOrBuzz($number)
{
    if ($number % 3 != 0 && $number % 5 != 0) {
        print $number;
    }
}

function printFizzWhenDivisibleByThree($number)
{
    if ($number % 3 == 0) {
        print "Fizz";
    }
}

function printBuzzWhenDivisibleByFive($number)
{
    if ($number % 5 == 0) {
        print "Buzz";
    }
}

fizzbuzz(15);
