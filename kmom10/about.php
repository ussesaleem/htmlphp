<?php
    $title = "Om BMO | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2>Om BMO</h2>
    <?php printAbout($res); ?>
</article>

<?php
    include("incl/footer.php");
?>
