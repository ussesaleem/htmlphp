<?php
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

$fileName = __DIR__ . "/db/bmo.sqlite";
$dsn = "sqlite:$fileName";
