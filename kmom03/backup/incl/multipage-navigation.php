<nav class="navbar">
<?php foreach ($pages as $key => $value) : ?>
    <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php?page=".$key ? "selected" : ""; ?>"
        href="?page=<?= $key ?>">
        <?= $value["title"] ?>
    </a>
<?php endforeach; ?>
</nav>
