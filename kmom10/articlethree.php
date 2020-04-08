<?php
    $title = "Article 3 | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2><?php printArticleThreeTitle($res) ?></h2>
    <p><i><?php printArticleThreeDate($res) ?></i></p>
        <?php
        printContentThree($res);
        ?>
    <p><?php printArticleThreeAuthor($res) ?></p>
</article>

<?php
    include("incl/footer.php");
?>
