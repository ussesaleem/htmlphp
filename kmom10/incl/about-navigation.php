<?php foreach ($pages as $key => $value) :
    if ($key != "about-site") :
        ?>
    <a class="<?= basename($_SERVER['REQUEST_URI']) == "om.php?page=".$key ? "selected" : ""; ?>"
        href="?page=<?= $key ?>">
        <?= $value["title"] ?>
    </a>
    <?php endif; ?>
<?php endforeach; ?>
