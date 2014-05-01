<?php
/**
 * Created by PhpStorm.
 * User: Alice
 * Date: 4/30/14
 * Time: 8:02 PM
 */

function fizzbuzz($number){
    for($i=1;$i <= $number;$i++){
        printNumber($i);
        fizz($i);
        buzz($i);
        print "\n";
    }
}
function printNumber($number){
    if($number%3!=0 && $number%5!=0){
        print $i;
    }
}
function fizz($number){
    if($number%3==0){
        print "Fizz";
    }
}
function buzz($number){
    if($number%5==0){
        print "Buzz";
    }
}

fizzbuzz(15);
