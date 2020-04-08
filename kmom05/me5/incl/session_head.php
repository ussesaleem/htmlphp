<div class="wrap-main">
    <nav class="sub-menu">
        <?php include(__DIR__ . "/session_head_navigation.php"); ?>
    </nav>
    <main>
        <article class="me-text">
            <?php if ($page) : ?>
                <?php require $page["file"] ?>
            <?php else : ?>
                <p>You have selected a page reference '<?= htmlentities($pageReference) ?>' that does not map to an actual page.</p>
            <?php endif; ?>
        </article>
    </main>
</div>
