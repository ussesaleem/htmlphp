<?php
    $title = "Articles | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id != 4;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2>Artiklar</h2>
    <p>Länkarna bredvid leder till de olika artiklarna. Navigera dig genom att klicka in på rubriken av artikeln som känns intressant vilket kommer ta dig till artikelsidan.</p>
    <p>För överblick av befintliga artiklar, se nedan:</p>
    <div class="about-table">
        <br><?php printArticles($res) ?>
    </div>
</article>

<?php
    include("incl/footer.php");
?>
