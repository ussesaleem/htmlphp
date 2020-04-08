<?php
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

$fileName = __DIR__ . "/../db/cars.sqlite";
$dsn = "sqlite:$fileName";

$fileName_j = __DIR__ . "/../db/boatclub.sqlite";
$dsn_j = "sqlite:$fileName_j";
