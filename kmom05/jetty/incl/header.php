<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    </head>
    <body>
        <header class="site-header">
            <img src="img/IMG_2309.jpg" class="bild" alt="logo">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
            <span class="site-title">Jetty page</span>
            <span class="site-slogan">Uppgift KMOM05</span>
        </header>
        <nav class="navbar">
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "jetty.php" ? "selected" : ""; ?>" href="jetty.php">JETTY PAGE</a>
        </nav>
