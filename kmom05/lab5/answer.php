<?php

/**
 * @preserve 5774b778b076f9497abfe050b0cf0b4b
 *
 * 5774b778b076f9497abfe050b0cf0b4b
 * htmlphp
 * lab5
 * v2
 * ussa19
 * 2019-10-20 14:00:28
 * v4.0.0 (2019-03-05)
 *
 * Generated 2019-10-20 16:00:28 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 5 - Htmlphp
 *
 * This lab pretty much deals with getting youreself acquainted with the PHP
 * Manual. Search, find and read. It will be fun.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Date and time
 *
 * In this section you will be working with the DateTime-object. If you
 * manipulate the object, such as add or subtract, the original object will be
 * changed, hence you will create new objects from the same date in these
 * exercises.
 *
 * Read more on [datetime in the
 * manual](http://php.net/manual/en/class.datetime.php).
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Use `new DateTime()` to create a new DateTime-object from the date:
 * `2004-12-06 16:14:22`. Format the object to present the year-month-day,
 * `Y-m-d` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$date = new DateTime("2004-12-06T16:14:22");




$ANSWER = $date->format("Y-m-d");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new DateTime-object with the same parameters and add 3 months to
 * it. Answer with the result, presented in the format: `Y-m-d`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$date2 = new DateTime("2004-12-06T16:14:22");

$date2 = $date2->add(new DateInterval("P3M"));


$ANSWER = $date2->format("Y-m-d");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Use one of your DateTime-objects and answer with the time, presented in the
 * format: `hours:minutes:seconds`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$date2 = new DateTime("2004-12-06T16:14:22");




$ANSWER = $date2->format("H:i:s");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Working with files
 *
 * In this section, you will be working with the file: `Grimm.txt`. It
 * contains a paragraph from a book and can be found in the lab folder.
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use `file_get_contents()` to get the file as a string. Save it to a
 * variable called `fileAsString`. Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$grimm = file_get_contents("./Grimm.txt");




$ANSWER = $grimm;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Use `file_get_contents()` to get 25 characters, starting on the 17th
 * character.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$section_of_grimm = file_get_contents("./Grimm.txt", false, null, 16, 25);




$ANSWER = $section_of_grimm;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Serialize
 *
 *
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Use the file `serialized.txt` in your lab folder and read it, unserialize
 * it and put the result in your answer.
 *
 * (Tips: Take a peek into your 'serialized.txt' to see how a serialized array
 * looks)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$serialized_text = file_get_contents("./serialized.txt");

$unserialized_text = unserialize($serialized_text);




$ANSWER = $unserialized_text;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Cryptography
 *
 * Reference to
 * [password_hash](http://php.net/manual/en/function.password-hash.php) and
 * [rot13](http://php.net/manual/en/function.str-rot13.php).
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Use `password_hash()` with the DEFAULT algorithm to create a hash of the
 * password: `"myPassword"`. Test `password_verify()` with different passwords
 * to see what it returns. Answer with the result, using `"myPassword"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$passw = "myPassword";

$hashing = password_hash($passw, PASSWORD_DEFAULT);




$ANSWER = password_verify($passw, $hashing);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Use `ROT13` encoding on your password: `"myPassword"`. Answer with the
 * result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = str_rot13($passw);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Use `ROT13` decoding to find which movies hides in the string:
 *
 * > "Pvaqreryyn, Ynql naq gur Genzc, Byq Lryyre, Gernfher Vfynaq, Gur Whatyr
 * Obbx"
 *
 * Each movie is comma-separated in the string above.
 *
 * Answer with an array containing all answers.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$encoded_array = array(str_rot13("Pvaqreryyn"), str_rot13("Ynql naq gur Genzc"), str_rot13("Byq Lryyre"), str_rot13("Gernfher Vfynaq"), str_rot13("Gur Whatyr Obbx"));





$ANSWER = $encoded_array;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, true);

/**
 * Exercise 4.4 (1 points)
 *
 * Calculate the hash of the password `"myPassword"` with `md5`. Answer with
 * the hash.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$passw = "myPassword";

$hash2 = md5($passw);


$ANSWER = $hash2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Multibyte strings
 *
 *
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Set the internal encoding to `ISO-8859-1`. Answer with the result of
 * `mb_internal_encoding()`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

mb_internal_encoding("ISO-8859-1");




$ANSWER = mb_internal_encoding();

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/**
 * Exercise 5.2 (1 points)
 *
 * Check the `strlen()` and `mb_strlen()` of the word `"skärgårdsö"`.
 * Answer with the two results as a comma and space-separated string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$check = "skärgårdsö";

$normal = strlen($check);
$special = mb_strlen($check);



$ANSWER = $normal . ", " . $special;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.2", $ANSWER, false);

/**
 * Exercise 5.3 (1 points)
 *
 * Set the internal encoding to `UTF-8` and check the `strlen()` and
 * `mb_strlen()` of the word `"skärgårdsö"`. Answer with the two results as
 * a comma-separated string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

mb_internal_encoding("UTF-8");

$normal2 = strlen($check);
$special2 = mb_strlen($check);


$ANSWER = $normal2 . ", " . $special2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * Create a new DateTime-object based on the same date and time and subtract 5
 * days and 3 hours from it. Answer with the whole date, presented in the
 * format: `Y-m-d hours:minutes:seconds`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$date3 = new DateTime("2004-12-06T16:14:22");

$modify_days = $date3->sub(new DateInterval("P5D"));
$modify_hours = $modify_days->sub(new DateInterval("PT3H"));



$ANSWER = $modify_hours->format("Y-m-d H:i:s");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Use a combination of `implode()` with a space as a delimiter and
 * `explode()` to format the content of the file `Grimm.txt` and remove
 * newline characters. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
