<?php

/**
 * @preserve fa8e4dac6659e4b64e29df2377d2daa8
 *
 * fa8e4dac6659e4b64e29df2377d2daa8
 * htmlphp
 * lab6
 * v2
 * ussa19
 * 2019-10-22 22:51:57
 * v4.0.0 (2019-03-05)
 *
 * Generated 2019-10-23 00:51:57 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 6 - Htmlphp
 *
 * In this lab you will be working with a SQLite database file: `myDB.sqlite`
 * and PDO.
 *
 * Do not forget to check the [PHP Manual on
 * PDO](http://php.net/manual/en/book.pdo.php)
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Working with SQLite and PDO
 *
 * The database has one table called `people`.
 *
 * The table 'people' has six columns:
 *
 * > `id`, `firstName`, `lastName`, `born`, `cityOfBirth`, `countryOfBirth`.
 *
 */

$filename = "myDB.sqlite";
$dsn = "sqlite:$filename";

try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw $e;
}

/**
 * Exercise 1.1 (1 points)
 *
 * Find the firstnames of the people born in USA. Answer with an array
 * containing their names.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT firstName FROM people WHERE countryOfBirth = 'USA'";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_COLUMN);


$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Find the first name and last name of the person born 1962.
 * Answer with a string in the format: `"Firstname Lastname"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT firstName, lastName FROM people WHERE born = 1962";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$ANSWER = $result["firstName"] . " " . $result["lastName"];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Sum the years the persons with the lastnames `Blanchett` and `Cage` were
 * born. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT sum(born) AS totalAge FROM people WHERE lastName IN ('Blanchett', 'Cage')";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$ANSWER = intval($result["totalAge"]);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Count the number of entries in the table `people`. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT count(people.id) AS id FROM people";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$ANSWER = intval($result["id"]);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Find which country `(countryOfBirth)` the oldest person was born in. Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT min(born), countryOfBirth FROM people";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$ANSWER = $result["countryOfBirth"];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * What is the average value of the column `born`? Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT avg(born) AS average FROM people";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$ANSWER = intval($result["average"]);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Find the youngest person born in USA. Which city is he/she born in? Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT max(born), cityOfBirth FROM people WHERE countryOfBirth = 'USA'";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);




$ANSWER = $result["cityOfBirth"];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * Get the first name and lastname of all persons in the database. Order them
 * by their last name, alphabetically and ascending.
 *
 * Answer with an array of strings, like this:
 *
 * > `["lastName firstName", "lastName firstName"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
