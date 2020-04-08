<?php
    $title = "Article 1 | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2><?php printArticleOneTitle($res) ?></h2>
    <p><i><?php printArticleOneDate($res) ?></i></p>
        <?php
        printContentOne($res);
        ?>
    <p><?php printArticleOneAuthor($res) ?></p>
</article>

<?php
    include("incl/footer.php");
?>
