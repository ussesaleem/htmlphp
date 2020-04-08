<?php
include __DIR__ . "/incl/config.php";
?>

<h1>Session destruction</h1>
<?php
session_destroy();
echo "The session has been destroyed.";
?>
