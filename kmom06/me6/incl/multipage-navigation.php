<?php foreach ($pages as $key => $value) :
    if ($key != "index") :
        ?>
    <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php?page=".$key ? "selected" : ""; ?>"
        href="?page=<?= $key ?>">
        <?= $value["title"] ?>
    </a>
    <?php endif; ?>
<?php endforeach; ?>
