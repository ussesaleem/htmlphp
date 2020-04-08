<?php
include __DIR__ . "/../incl/src/functions.php";

$fileName = __DIR__ . "/../db/boatclub.sqlite";
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);
?>

<h1>B</h1>

<p>Detaljer om båt:</p>

<?php
$position = $_GET["position"] ?? null;
if (!isset($position)) {
    echo "Ingen båt har valts!";
    return;
}

$sql = "SELECT * FROM jetty WHERE position='$position'";
$stmt = $db->prepare($sql);

echo "<p>SQL-anropet:<br><code>$sql</code><p>";
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>Resultatet innehåller " . count($res) . " rader.</p>";

printJettyDetails($res);
?>
