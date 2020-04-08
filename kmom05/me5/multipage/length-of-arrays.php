<h1>Prints the length of arrays in $_SERVER</h1>

<p>This page will show the length of all the values of keys in $_SERVER.<p>

<p>The server is running: <?= htmlentities($_SERVER['SERVER_SIGNATURE']); ?></p>

<p>Your IP adress is: <?= htmlentities($_SERVER['REMOTE_ADDR']); ?></p>

<?php
$biggestSoFar = 0;
?>

<?php foreach ($_SERVER as $key => $value) : ?>
    <?= $key . ": " . $value . " (length: "; ?>
    <?= strlen(strval($value)) . ")"; ?><br>
<?php endforeach ?><br>


<?php foreach ($_SERVER as $key => $value) :
    $length = strlen(strval($value));
    if ($length > $biggestSoFar) {
        $biggestSoFar = $length;
        $biggestKey = $key;
        $biggestValue = $value;
    } ?>
<?php endforeach; ?><br>

<?= "The longest value is \"" . $biggestValue . "\" that is " . $biggestSoFar . " characters long, from the key \"" . $biggestKey . "\"."; ?>
