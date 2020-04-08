<?php

/**
 * @preserve 5bbed7d68f09a9f71f9df5f6c7df3025
 *
 * 5bbed7d68f09a9f71f9df5f6c7df3025
 * htmlphp
 * lab2
 * v2
 * ussa19
 * 2019-09-18 20:13:19
 * v4.0.0 (2019-03-05)
 *
 * Generated 2019-09-18 22:13:20 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"wind"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"rabbit"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$wordOne = "wind";

$wordTwo = "rabbit";

$resultone = $wordOne . "-" . $wordTwo;


$ANSWER = $resultone;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 67.83. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatNumber = 67.83;




$ANSWER = $wordOne . "=" . $floatNumber;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 258. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$intNumber = 258;




$ANSWER = $intNumber . " " . $wordTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 258 rabbit's doing some wind."` by combining
 * pure text with the values of your variables `wordOne`, `wordTwo` and
 * `intNumber`. Store the resulting text in a variable `sentence`. Answer with
 * the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sentence = "There are " . $intNumber . " " . $wordTwo . "'s" . " doing some " . $wordOne . ".";




$ANSWER = $sentence;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = strlen($sentence);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 3 in the word `"pound"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = substr("pound", 3, 1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"ferret"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = substr("ferret", 3, 2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `n` in the
 * word `"baboon"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$mystringone = "baboon";

$findmeone = "n";




$ANSWER = strpos($mystringone, $findmeone);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"baboon"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$mystringtwo = "baboon";

$findmetwo = "xyz";




$ANSWER = strpos($mystringtwo, $findmetwo);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `145 is less than 385` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$resulttwo = 145 < 385;




$ANSWER = $resulttwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `394 is larger than 88`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$resultthree = 394 > 88;




$ANSWER = $resultthree;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 6, 5, 7, 9 and 10. Save the result in a variable called
 * `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 25.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$totalSum = 6 + 5 + 7 + 9 + 10;

if ($totalSum > 25) {
    $statementanswerone = "higher";
} elseif ($totalSum < 25) {
    $statementanswerone = "lower";
} else {
    $statementanswerone = "equal";
}



$ANSWER = $statementanswerone;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 24
 * and  35. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$yes = true;

$no = false;

if ($totalSum >= 24 && $totalSum <= 35) {
    $statementanswertwo = $yes;
} else {
    $statementanswertwo = $no;
}




$ANSWER = $statementanswertwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 8 to the number 37, 74 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$count = 1;
$add = 8;
$total = 37;

while ($count <= 74) {
    $total = $total + $add;
    $count = $count + 1;
}




$ANSWER = $total;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 7.57 from the number 748 until the
 * number is between (not equal to) 34 and 44. Answer with the final result as
 * a float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$subs = 7.57;
$start = 748;

while ($start > 44 || $start < 34) {
    $start = $start - $subs;
}


$ANSWER = round($start, 2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 11. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$str = "";

for ($i = 0; $i <= 11; $i++) {
     $str = $str . $i . ",";
}



$ANSWER = substr($str, 0, -1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 34 to 44.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$res = 0;

for ($i = 34; $i <= 44; $i++) {
    if ($i % 10 == 0) {
        continue;
    } elseif ($i % 2 == 0) {
        $res = $res + ($i * M_PI);
    } else {
        $res = $res - $i ** (1/2);
    }
}


if ($res == (int) $res) {
    $ans = $res;
} else {
    $ans = (int) $res + 1;
}


$ANSWER = $ans;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
