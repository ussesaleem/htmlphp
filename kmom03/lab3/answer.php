<?php

/**
 * @preserve 1898b73113e79205e97a7cccd2696646
 *
 * 1898b73113e79205e97a7cccd2696646
 * htmlphp
 * lab3
 * v2
 * ussa19
 * 2019-09-28 13:36:34
 * v4.0.0 (2019-03-05)
 *
 * Generated 2019-09-28 15:36:34 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[Russia, France,
 * Norway]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries = ["Russia", "France", "Norway"];




$ANSWER = $countries[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[Moscow, Paris,
 * Oslo]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitals = ["Moscow", "Paris", "Oslo"];

$combined = $countries[0] . " = " . $capitals[0] . ", " . $countries[1] . " = " . $capitals[1] . ", " . $countries[2] . " = " . $capitals[2];




$ANSWER = $combined;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[499, 98, 21.63, 5,
 * 9855]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [499, 98, 21.63, 5, 9855];

$sumnumbers1 = $numbers1[0] + $numbers1[1];




$ANSWER = $sumnumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 3 in
 * `numbers1` to the item at index 1 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1[3] = $capitals[1];




$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countrystring = $countries[0] . "-" . $countries[2];




$ANSWER = $countrystring;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray = [
    $countries[0] => $capitals[0],
    $countries[1] => $capitals[1],
    $countries[2] => $capitals[2],
];




$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"India"` with the value `"New Delhi"` to your `keyArray`.
 * Answer with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries[] = "India";
$capitals[] = "New Delhi";

$keyArray = [
    $countries[0] => $capitals[0],
    $countries[1] => $capitals[1],
    $countries[2] => $capitals[2],
    $countries[3] => $capitals[3],
];




$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"Russia"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = $keyArray["Russia"];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 *
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[499, 98, 21.63, 5, 9855]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$count = count($numbers1);




$ANSWER = $count;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[499, 98, 21.63, 5, 9855]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [499, 98, 21.63, 5, 9855];
arsort($numbers2);




$ANSWER = $numbers2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[499, 98, 21.63, 5, 9855]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [499, 98, 21.63, 5, 9855];




$ANSWER = array_pop($numbers2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[324, 36, 20.02, 8, 4998]` and insert the number
 * 56. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers3 = [324, 36, 20.02, 8, 4998];

array_push($numbers3, 56);




$ANSWER = $numbers3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries = ["Russia", "France", "Norway"];

$newArray = $countries;

$element = array_shift($newArray);




$ANSWER = $element;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"Oregon"` and `"Wyoming"`
 * in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


array_unshift($newArray, "Wyoming");
array_unshift($newArray, "Oregon");




$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, true);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[499, 98, 21.63, 5, 9855]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers4 = [499, 98, 21.63, 5, 9855];

$reversed = array_reverse($numbers4);




$ANSWER = $reversed;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitals = ["Moscow", "Paris", "Oslo"];

$hyphensep = implode("-", $capitals);




$ANSWER = $hyphensep;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 *
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[10, 3, 45, 98, 4, 7,
 * 56, 23, 3, 1]`. Use a for-each loop to sum each item with 14 and put them
 * in a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];
$summedNumbers1 = array();

foreach ($numbers1 as $value) {
    $total = $value + 14;
    array_push($summedNumbers1, $total);
}



$ANSWER = $summedNumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[1, 6, 4, 67, 43, 2,
 * 89, 8, 55, 10]`. Use at least a for-each loop to add all numbers larger
 * than 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [1, 6, 4, 67, 43, 2, 89, 8, 55, 10];
$largeNumbers = array();

foreach ($numbers2 as $value) {
    if ($value > 20) {
        $total = $value;
        array_push($largeNumbers, $total);
    }
}


$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, true);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$start = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5,
];

foreach ($start as $key => $value) {
    $endArray[] = $key . "=" . $value;
}

$final = implode(",", $endArray);


$ANSWER = $final;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Brazil"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$test = "Brazil";

switch ($test) {
    case "Sweden":
        $continent = "Europe";
        break;

    case "Brazil":
        $continent = "South America";
        break;

    case "China":
        $continent = "Asia";
        break;

    case "Australia":
        $continent = "Oceania";
        break;

    default:
        $continent = "North America";
        break;
}


$ANSWER = $continent;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Finland"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$test = "Finland";

switch ($test) {
    case "Sweden":
    case "Denmark":
    case "Finland":
        $continent = "Europe";
        break;

    case "Brazil":
        $continent = "South America";
        break;

    case "China":
        $continent = "Asia";
        break;

    case "Australia":
        $continent = "Oceania";
        break;

    default:
        $continent = "North America";
        break;
}



$ANSWER = $continent;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[324, 36, 20.02, 8, 4998]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers5 = [324, 36, 20.02, 8, 4998];
sort($numbers5);




$ANSWER = $numbers5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
