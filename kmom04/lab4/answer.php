<?php

/**
 * @preserve 45acb2bfb0165cb27c949c249959f735
 *
 * 45acb2bfb0165cb27c949c249959f735
 * htmlphp
 * lab4
 * v2
 * ussa19
 * 2019-10-07 20:26:21
 * v4.0.0 (2019-03-05)
 *
 * Generated 2019-10-07 22:26:21 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 4 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Basic functions
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a function called `sumNumbers()` that should take 2 numbers as
 * arguments and return the sum of them.
 *
 * Answer with a call to the function using the numbers 493 and 516.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$val1 = 493;
$val2 = 516;

function sumNumbers($value1, $value2)
{
    $sum = $value1 + $value2;
    return $sum;
}




$ANSWER = sumNumbers($val1, $val2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a function called `sumArray()` that should take an array as argument
 * and return the sum of all items in the array.
 *
 * Answer with a call to the function using the array: `[4,256,5,13,1]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr = array(4, 256, 5, 13, 1);

function sumArray($array)
{
    $sum = array_sum($array);
    return $sum;
}




$ANSWER = sumArray($arr);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a function called `modArray()` that should take 2 arguments, an
 * array and a string. Replace the first item in the array with the string and
 * return the array.
 *
 * Answer with a call to the function using the arguments: `[3,652,9,74,7]`
 * and `"turnip"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr2 = array(3, 652, 9, 74, 7);
$str = "turnip";

function modArray($array, $string)
{
    $array[0] = $string;
    return $array;
}



$ANSWER = modArray($arr2, $str);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a function called `printRange()` that should take 2 numbers as
 * arguments, start and stop. The function should add all even numbers between
 * start and stop (not including) to an array and return it.
 *
 * Answer with a call to the function using the arguments: 9 and 41.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function printRange($num1, $num2)
{
    foreach (range($num1+1, $num2-1) as $i) {
        if (0 === $i % 2) {
            $total[] = $i;
        }
    }
    return $total;
}




$ANSWER = printRange(9, 41);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, true);

/**
 * Exercise 1.5 (1 points)
 *
 * Create a function called `combineArrays()` that takes two arrays as
 * arguments. The function should combine the arrays to one associative array
 * and return it. The first argument is the key and the second argument is the
 * value.
 *
 * Answer with a call to the function using the arguments:
 * `["green","brown","pink","white","gray","blue"]` and
 * `["frog","bear","pig","lion","wolf","whale"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr1 = array("green", "brown", "pink", "white", "gray", "blue");
$arr2 = array("frog", "bear", "pig", "lion", "wolf", "whale");

function combineArrays($theKey, $theValue)
{
    $combined = array_combine($theKey, $theValue);
    return $combined;
}




$ANSWER = combineArrays($arr1, $arr2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a function called `euroToDollar()` that takes one argument, the euro
 * amount to convert to dollars. Count 1 Euro as 1.261215 dollars. Return the
 * dollar amount of 401 Euros.
 *
 * Answer with the result as a double with 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


function euroToDollar($euro)
{
    $dollar = $euro * 1.261215;
    return round($dollar, 4);
}




$ANSWER = euroToDollar(401);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, true);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a function called `inRange()` that takes one argument. The function
 * should return `true` if the argument is higher than 50 and lower than 100.
 * If the number is out of range, the function should return `false`. The
 * return type should be boolean.
 *
 * Use the argument 47 and answer with a call to the function.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function inRange($check)
{
    if ($check > 50 && $check < 100) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}




$ANSWER = inRange(47);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Create a function called `calculateArea()` that takes one argument, the
 * diameter of a circle. The function should return the area of the circle,
 * with 4 decimals.
 *
 * Answer with the result if the diameter is 20. ( hint: `pi()` )
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function calculateArea($diameter)
{
    $radius = $diameter / 2;
    $area = pi() * $radius**2;
    return round($area, 4);
}




$ANSWER = calculateArea(20);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Create a function called `fibonacci()`. The function should use the
 * [Fibbonacci Sequence](http://en.wikipedia.org/wiki/Fibonacci_number),
 * starting with `1, 1, 2`. Return the sum of all odd numbers in the sequence,
 * when the sequence value dont exceed 1.000.000.
 *
 * Answer with a call of the function. A Fibonacci-sequence can look like
 * this: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. You add the current value with
 * the last, i.e. `1+2=3, 3+2=5, 5+3=8 etc`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function fibonacci($first = 0, $second = 1)
{
    $total = 0;
    if ($first % 2 != 0) {
        $total += $first;
    } elseif ($second % 2 != 0) {
        $total += $second;
    }
    $nextval = $first + $second;
    while ($nextval < 1000000) {
        if ($nextval % 2 != 0) {
            $total += $nextval;
        }
        $first = $second;
        $second = $nextval;
        $nextval = $first + $second;
    }
    return $total;
}




$ANSWER = fibonacci();

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * In this exercises you should use the former functions `sumArray()` and
 * `calculateArea()`. Create a new function called `calculateMany()` that
 * takes an array with numbers as argument. For every number in the array,
 * call `calculateArea()` and store the result in a new array. The last
 * position in your new array should hold the result of a call to the function
 * `calculateArea()` where you pass the sum of the whole array, you passed as
 * argument. All numbers in the resulting array should be rounded up to
 * nearest integer. Loop through the array and convert all values to nearest
 * higher integer value.
 *
 * Tip: `intval()`.
 * Note: If your result seems correct but still fails, make sure your values
 * are of the type Integer and not Float.
 *
 * Answer with a call to `calculateMany()` with the array `42, 20, 18, 8, 11`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
