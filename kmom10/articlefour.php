<?php
    $title = "Article 4 | BMO";
    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Article WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="about">
    <h2><?php printArticleFourTitle($res) ?></h2>
    <p><i><?php printArticleFourDate($res) ?></i></p>
        <?php
        printContentFour($res);
        ?>
    <p><?php printArticleFourAuthor($res) ?></p>
</article>

<?php
    include("incl/footer.php");
?>
