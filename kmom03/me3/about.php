<?php
    $title = "Om min sida | htmlphp";
    include("incl/header.php");
    $numFiles = count(get_included_files());
    $memoryUsed = memory_get_peak_usage(true);
    $loadTime = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
?>
<main>
    <article class="about">
        <h1>About</h1>
        <p>Här kommer snart en beskrivning om min sida.</p>
    </article>
</main>

    <?php
        include("incl/byline.php");
        include("incl/footer.php");
    ?>
