<?php
include("config.php")
?>

<h1>Print the content of $_SERVER</h1>

<p>The content of the PHP variabel <code>$_SERVER</code> is:<p>

<pre>
<?= htmlentities(print_r($_SERVER, true)); ?>
</pre>

<p>The server is running: <?= htmlentities($_SERVER['SERVER_SIGNATURE']); ?></p>

<p>Your IP adress is: <?= htmlentities($_SERVER['REMOTE_ADDR']); ?></p>

<p>
    There are <?= count($_SERVER); ?> entries in the array for $_SERVER.<br>
    The first array value is <?= reset($_SERVER); ?> from the key <?= key($_SERVER); ?> and the last value is <?= end($_SERVER); ?> from the key <?= key($_SERVER); ?>.
</p>
