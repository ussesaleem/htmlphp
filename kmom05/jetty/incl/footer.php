<footer class="site-footer">
    <hr>
        <p>Validatorer: <a href="http://validator.w3.org/check/referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a></p>
        <p>Specifikationer: <a href="https://html.spec.whatwg.org/multipage/">HTML standard</a> <a href="https://www.w3.org/TR/CSS/">CSS standard</a> <a href="https://www.w3.org/2009/cheatsheet/">Cheatsheet</a></p>
        <p>Time to load page: <b><?= getPageLoadTime() ?></b> ms. | Files included: <b><?= getLoadedFiles() ?></b> files.<br><?= memoryUsage() ?></b>.</p>
</footer>
</body>
</html>
