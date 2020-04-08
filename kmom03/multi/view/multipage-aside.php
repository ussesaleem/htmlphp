<aside>
    <nav>
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <li class="leftnav">
                <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php?page=".$key ? "selected" : ""; ?>"
                    href="?page=<?= $key ?>">
                    <?= $value["title"] ?>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>
