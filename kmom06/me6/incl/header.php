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
            <span class="site-title">ME: Usama Saleem</span>
            <span class="site-slogan">Leg. Apotekare | Entrepenör | Student på BTH</span>
        </header>
        <nav class="navbar">
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">HEM</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "report.php" ? "selected" : ""; ?>" href="report.php">REDOVISA</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="multipage.php">MULTIPAGE</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">OM</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "form.php" ? "selected" : ""; ?>" href="form.php">KONTAKT</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php" ? "selected" : ""; ?>" href="session_head.php">SESSION</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "jetty.php" ? "selected" : ""; ?>" href="jetty.php">JETTY</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "search.php" ? "selected" : ""; ?>" href="search.php">SÖK</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "admin.php" ? "selected" : ""; ?>" href="admin.php">ADMIN</a>
        </nav>

<?php
include __DIR__ . "/src/functions.php";
?>
