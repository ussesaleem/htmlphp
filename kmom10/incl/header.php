<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    </head>
    <body>
        <header class="site-header">
            <img src="img/maggy/likvagn_med_hast.jpg" class="bildone" alt="logo">
            <img src="img/maggy/begravningsbyra_medarbetare.jpg" class="bildtwo" alt="logo">
            <span class="site-title">Begravningsmuseum Online<br>(BMO)</span>
            <nav class="navbar">
                <a class="<?= basename($_SERVER['REQUEST_URI']) == "home.php" ? "selected" : ""; ?>" href="home.php">HEM</a>
                <a class="<?= basename($_SERVER['REQUEST_URI']) == "content.php" ? "selected" : ""; ?>" href="content.php">ARTIKLAR</a>
                <a class="<?= basename($_SERVER['REQUEST_URI']) == "object.php" ? "selected" : ""; ?>" href="object.php">OBJEKT</a>
                <a class="<?= basename($_SERVER['REQUEST_URI']) == "om.php" ? "selected" : ""; ?>" href="om.php">OM</a>
            </nav>
        </header>

<?php
include __DIR__ . "/src/config.php";
include __DIR__ . "/src/functions.php";
?>
