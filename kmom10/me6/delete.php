<?php
    $title = "Ta bort | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Ta bort</h1>
        </header>

<p>
<?php
$ID = $_GET["ID"] ?? "";

if (!empty($ID)) {
    $sql = "DELETE FROM Bilar WHERE ID='$ID';";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    echo "Bilen har raderats.";
}
?>

<?php
if (empty($ID)) {
    echo "Ingen bil har valts.";
    return;
}
?>
</p>
        <a href="admin.php"><button>Tillbaka till Admin</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
