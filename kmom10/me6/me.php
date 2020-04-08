<?php
    $title = "Min me-sida | htmlphp";
    include("incl/header.php");
    include __DIR__ . "/incl/config.php";
?>
<main>
    <article class="me-text">
        <header>
            <h1>Om Mig Själv</h1>
            <p class="date"><i>Uppdaterad <time datetime="2019-09-20 20:24:45">20e september 2019</time></i></p>
        </header>

        <img src="img/profile.jpeg" class="me" alt="Bild på Usama Saleem">

        <p>Mitt namn är Usama Saleem. Jag är född i Linköping men uppvuxen i Göteborg och bor sedan 3 år tillbaka i Stockholm.</p>
        <p>Jag är utbildad apotekare från Göteborgs Universitet och jobbar för närvarande inom Life Science industrin som Supply Chain Coordinator på heltid om dagarna.</p>
        <p>Programmering är ett nyvunnet intresse som jag fann för några år sedan då jag läste en onlinekurs inom HTML. Detta ledde mig till att vilja fördjupa mig mer inom området vilket ledde till att jag sökte detta program.</p>
        <p>Mina hobbyn är hamburgare och kaffe. Jag är på jakt efter den perfekta hamburgaren och har prövat ett gäng olika, det närmsta jag har kommit till perfekt är In n Out burgers i Kalifornien. Vidare är jag även kaffefantast där favoriten är av typen Cortado.</p>
        <p>Jag har länge sett fram emot denna utbildning och är väldigt entusiastisk till de kommande två åren.</p>
        <p>Vi hörs!</p>

        <footer class="articlebyline">
            <p>Skrivet av Usama Saleem<br><i>Distansstudent på BTH</i></p>
        </footer>
    </article>
</main>
<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
