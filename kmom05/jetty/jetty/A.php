<?php
include __DIR__ . "/../incl/src/functions.php";

$fileName = __DIR__ . "/../db/boatclub.sqlite";
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);
?>

<h1>A</h1>

<p>Nedan är innehållet i tabellen Jetty:</p>

<?php
$sql = "SELECT * FROM jetty";
$stmt = $db->prepare($sql);

echo "<p>SQL-anropet:<br><code>$sql</code><p>";
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>Resultatet innehåller " . count($res) . " rader.</p>";

printJettyResultsettoHTMLTable($res);
?>
