<?php
    $title = "Article 2 | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2><?php printArticleTwoTitle($res) ?></h2>
    <p><i><?php printArticleTwoDate($res) ?></i></p>
        <?php
        printContentTwo($res);
        ?>
    <p><?php printArticleTwoAuthor($res) ?></p>
</article>

<?php
    include("incl/footer.php");
?>
