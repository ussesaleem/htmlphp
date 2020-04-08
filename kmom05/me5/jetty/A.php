<?php
$db_j = connectToDatabase($dsn_j);
?>

<h1>A</h1>

<p>Nedan är innehållet i tabellen Jetty:</p>

<?php
$sql = "SELECT * FROM jetty";
$stmt = $db_j->prepare($sql);

echo "<p>SQL-anropet:<br><code>$sql</code><p>";
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>Resultatet innehåller " . count($res) . " rader.</p>";

printJettyResultsettoHTMLTable($res);
?>
