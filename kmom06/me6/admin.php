<?php
    $title = "Admin | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Admin</h1>
        </header>

<?php
$sql = "SELECT * FROM Bilar;";
$stmt = $db->prepare($sql);

$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>Resultatet innehåller " . count($res) . " rader.</p>";

printCars($res);
?>
<a href="create.php"><button>Lägg till</button></a>
<a href="init.php"><button>Återskapa tabell</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
