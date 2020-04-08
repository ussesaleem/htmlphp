<nav class="about-nav">
    <h3>Navigering</h3>
    <?php include(__DIR__ . "/content-navigation.php"); ?>
</nav>
    <?php if ($page) : ?>
        <?php require $page["file"] ?>
    <?php else : ?>
        <p>You have selected a page reference '<?= htmlentities($pageReference) ?>' that does not map to an actual page.</p>
    <?php endif; ?>
