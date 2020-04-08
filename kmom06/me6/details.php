<?php
    $title = "Detaljsida | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Detaljsida</h1>
        </header>

<?php
$ID = $_GET["ID"] ?? "";
if (empty($ID)) {
    echo "Ingen bil har valts.";
}
?>

<?php
$sql = "SELECT * FROM Bilar WHERE ID='$ID'";
$stmt = $db->prepare($sql);

$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

printCarDetails($res);
?>
        <a href="search.php"><button>Tillbaka till söksidan</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
