<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display"
        <title>Kursmoment 02 | Testsida</title>
    </head>
    <body>
        <nav class="navbar">
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="index.php">Home</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">About</a>
        </nav>
