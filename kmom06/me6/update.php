<?php
    $title = "Ändra | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Ändra</h1>
        </header>

<p>
<?php
$brand = $_POST["Brand"] ?? "";
$model = $_POST["Model"] ?? "";
$year = $_POST["Year"] ?? "";
$power = $_POST["Power"] ?? "";
$ID = $_REQUEST["ID"] ?? "";

if (!empty($ID) && !empty($brand) && !empty($model) && !empty($year) && !empty($power)) {
    $sql = "UPDATE Bilar SET Brand='$brand', Model='$model', Year='$year', Power='$power' WHERE ID='$ID';";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    echo "'$brand $model' har uppdaterats.";
}
?>

<?php
if (empty($ID)) {
    echo "Ingen bil har valts.";
    return;
}
?>

<?php
$sql = "SELECT * FROM Bilar WHERE ID='$ID'";
$stmt = $db->prepare($sql);

$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$bil = $res[0];
?>
</p>

        <form class="car-form" action="update.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $bil['ID']; ?>">
            <label for="Brand">Brand</label>
            <input type="text" name="Brand" ID="Brand" value="<?php echo $bil['Brand']; ?>" placeholder="Ex Volkswagen" required="True">
            <label for="Model">Model</label>
            <input type="text" name="Model" ID="Model" value="<?php echo $bil['Model']; ?>" placeholder="Ex Golf" required="True">
            <label for="Year">Year</label>
            <input type="number" min="1900" max="9999" name="Year" ID="Year" value="<?php echo $bil['Year']; ?>" placeholder="Ex 2018" required="True">
            <label for="Power">Power</label>
            <input type="number" min="0" max="9999" name="Power" ID="Power" value="<?php echo $bil['Power']; ?>" placeholder="Ex 110" required="True">
            <button type="submit">Ändra</button>
        </form>
        <a href="admin.php"><button>Tillbaka till Admin</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
