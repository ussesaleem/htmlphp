<?php
include __DIR__ . "/../incl/src/functions.php";

$fileName = __DIR__ . "/../db/boatclub.sqlite";
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);
?>

<h1>Jetty page</h1>

<p>Ok, du är nu uppkopplad till databasen!</p>
