<?php
include __DIR__ . "/incl/config.php";
?>

<h1>Session test</h1>

<pre>
    Inkommande:
    <?php
    $value = 1;
    var_dump($_SESSION);
    if (!isset($_SESSION["val"])) {
        $_SESSION["val"] = 1;
    }

    $_SESSION["val"] = $_SESSION["val"] * 2;

    ?>

<pre>
    Utgående:
    <?php
    var_dump($_SESSION);
    ?>
