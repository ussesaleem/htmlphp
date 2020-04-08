<?php
    $title = "Lägg till | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Lägg till</h1>
        </header>

<p>
<?php
$brand = $_POST["Brand"] ?? "";
$model = $_POST["Model"] ?? "";
$year = $_POST["Year"] ?? "";
$power = $_POST["Power"] ?? "";

if (!empty($brand) && !empty($model) && !empty($year) && !empty($power)) {
    $sql = "INSERT INTO Bilar (Brand, Model, Year, Power) VALUES ('$brand', '$model', '$year', '$power')";
    $stmt = $db->prepare($sql);

    $stmt->execute();
    echo "'$brand $model' har lagts till i databasen.";
}
?>
</p>

        <form class="car-form" action="create.php" method="post">
            <label for="Brand">Brand</label>
            <input type="text" name="Brand" ID="Brand" value="" placeholder="Ex Volkswagen" required="True">
            <label for="Model">Model</label>
            <input type="text" name="Model" ID="Model" value="" placeholder="Ex Golf" required="True">
            <label for="Year">Year</label>
            <input type="number" min="1900" max="9999" name="Year" ID="Year" value="" placeholder="Ex 2018" required="True">
            <label for="Power">Power</label>
            <input type="number" min="0" max="9999" name="Power" ID="Power" value="" placeholder="Ex 110" required="True">
            <button type="submit">Lägg till</button>
        </form>
        <a href="admin.php"><button>Tillbaka till Admin</button></a>
    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
