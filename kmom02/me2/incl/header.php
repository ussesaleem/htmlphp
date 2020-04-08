<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    </head>
    <body>
        <header class="site-header">
            <img src="img/IMG_2309.jpg" class="bild" alt="logo">
            <span class="site-title">Me-sida för Usama</span>
            <span class="site-slogan">Min första fina me-sida är på gång.</span>
        </header>
        <nav class="navbar">
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "report.php" ? "selected" : ""; ?>" href="report.php">Redovisning</a>
            <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om</a>
        </nav>
