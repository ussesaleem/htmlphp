<?php
    $title = "Söksida | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Söksida</h1>
        </header>
        <form>
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
<p><?php
$search = $_GET["search"] ?? "";
if (empty($search)) {
    echo "Fyll i ett sökord, eller klicka på 'Detaljer' i listan nedan.";
} else {
    echo "Sökträffar för: '$search'";
}
?></p>
<?php
$sql = "SELECT * FROM Bilar WHERE Brand LIKE '%$search%' OR Model LIKE '%$search%' OR Year LIKE '%$search%' OR Power LIKE '%$search%'";
$stmt = $db->prepare($sql);

$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>Resultatet innehåller " . count($res) . " rader.</p>";

printCars($res);
?>
        </form>

    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
