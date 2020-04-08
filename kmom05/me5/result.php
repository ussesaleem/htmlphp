<?php
    $title = "Redirect | htmlphp";
    include("incl/header.php");
?>
<main>
    <article class="about">
        <h1>Redirect</h1>
        <p>Tack för ditt meddelande!</p>

    <?php
    echo "POST:\n";
    var_dump($_POST);
    ?>
    </article>
</main>

    <?php
        include("incl/byline.php");
        include("incl/footer.php");
    ?>
