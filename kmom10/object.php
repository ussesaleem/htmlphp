<?php
    $title = "Objekt | BMO";
    include("incl/header.php");

    $db = connectToDatabase($dsn);

    $sql = "SELECT * FROM Object WHERE id;";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<article class="objectpage">
    <h2>Objekt</h2>
    <div class="objects">
        <?php printObjectOne($res) ?><br>
        <?php printObjectTwo($res) ?><br>
        <?php printObjectThree($res) ?><br>
        <?php printObjectFour($res) ?><br>
        <?php printObjectFive($res) ?><br>
        <?php printObjectSix($res) ?><br>
        <?php printObjectSeven($res) ?><br>
        <?php printObjectEight($res) ?><br>
        <?php printObjectNine($res) ?><br>
        <?php printObjectTen($res) ?><br>
        <?php printObjectEleven($res) ?><br>
        <?php printObjectTwelve($res) ?><br>
        <?php printObjectThirteen($res) ?><br>
        <?php printObjectFourteen($res) ?><br>
        <?php printObjectFifteen($res) ?><br>
        <?php printObjectSixteen($res) ?><br>
        <?php printObjectSeventeen($res) ?><br>
        <?php printObjectEighteen($res) ?><br>
        <?php printObjectNineteen($res) ?><br>
        <?php printObjectTwenty($res) ?><br>
        <?php printObjectTwentyOne($res) ?><br>
        <?php printObjectTwentyTwo($res) ?><br>
        <?php printObjectTwentyThree($res) ?><br>
        <?php printObjectTwentyFour($res) ?><br>
        <?php printObjectTwentyFive($res) ?><br>
        <?php printObjectTwentySix($res) ?><br>
        <?php printObjectTwentySeven($res) ?><br>
        <?php printObjectTwentyEight($res) ?><br>
        <?php printObjectTwentyNine($res) ?><br>
        <?php printObjectThirty($res) ?><br>
    </div>
</article>

<?php
    include("incl/footer.php");
?>
