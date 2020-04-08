<?php
    $title = "Återskapa | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Återskapa</h1>
        </header>

<p>
<?php
$sql = "DROP TABLE IF EXISTS Bilar";
$stmt = $db->prepare($sql);
$stmt->execute();

$sql = "CREATE TABLE 'Bilar' (
	'ID'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	'Brand'	TEXT NOT NULL,
	'Model'	TEXT NOT NULL,
	'Year'	INTEGER NOT NULL,
	'Power'	INTEGER NOT NULL
);";
$stmt = $db->prepare($sql);
$stmt->execute();

$sql = "INSERT INTO Bilar (Brand, Model, Year, Power) VALUES
    ('Volkswagen', 'Golf', '2018', '110'),
    ('Volkswagen', 'Scirocco', '2009', '160'),
    ('Audi', 'A3', '2014', '150'),
    ('Volvo', 'S40', '2009', '140'),
    ('Renault', 'Clio', '2003', '75');";
$stmt = $db->prepare($sql);
$stmt->execute();

echo "Tabellen har återskapats."
?>

</p>
        <a href="admin.php"><button>Tillbaka till Admin</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
