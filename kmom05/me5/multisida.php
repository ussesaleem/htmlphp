<?php
    $title = "Multisida | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
    $db = connectToDatabase($dsn);
?>

<main>
    <article class="me-text">
        <header>
            <h1>Multisida</h1>
            <p>Ok, du är nu uppkopplad till databasen!</p>
        </header>

    </article>
</main>

<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
