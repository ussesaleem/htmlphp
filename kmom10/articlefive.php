<?php
    $title = "Article 5 | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2><?php printArticleFiveTitle($res) ?></h2>
    <p><i><?php printArticleFiveDate($res) ?></i></p>
        <?php
        printContentFive($res);
        ?>
    <p><?php printArticleFiveAuthor($res) ?></p>
</article>

<?php
    include("incl/footer.php");
?>
