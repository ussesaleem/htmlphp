<?php
    $title = "Min redovisningssida | htmlphp";
    include("incl/header.php");
    $numFiles = count(get_included_files());
    $memoryUsed = memory_get_peak_usage(true);
    $loadTime = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
?>
<main>
    <article class="redovisning">
        <h1>Redovisning</h1>
        <p>Här kommer min redovisning.</p>

        <section>

            <h2>Kmom01</h2>

            <p><b>Vilken utvecklingsmiljö använder du?</b></p>

            <p>Jag använder Mac OS och har installerat programmet Atom som programmeringen sker i. Utöver detta använder jag mig av terminalen som finns tillgänglig i datorn sedan tidigare med alla dess funktioner som ett komplement.</p>


            <p><b>Är du bekant med HTML, CSS och PHP sedan tidigare eller har du kanske jobbat med liknande tekniker?</b></p>

            <p>Jag har tidigare genomgått en HTML-kurs via Codeacademy där jag lärde mig grunderna, dock inte behövt använda det i ett omfattande projekt likt kursmomenten i denna kurs. Tanken efter HTML-kursen var att bygga på språket CSS, men eftersom programmeringsvärlden är så pass stor var det svårt för mig, på den tiden, att förstå vilka enstaka kurser man skulle sätta ihop för att få en så bra helhetsbild som möjligt.</p>


            <p><b>Gick det bra att installera labbmiljön eller var det något som krånglade?</b></p>

            <p>Jag tyckte att processen för att utföra kmom01 var väldigt smidig. Informationen på dbwebb.se är väldigt omfattande och vägleder en på ett instruktivt bra sätt. En av svårigheterna som jag upplevde dock var genvägarna i terminalen för att publicera/validera, i Python kmom01 innehöll det steg-för-steg instruktioner för validering/publicering. Det kan ha varit ett medvetet val att börja ta bort instruktioner, vilket är förståeligt, men hade gärna önskat någon kortare tips. Bortsett från denna lilla motgång gick resten mycket smidigt till.</p>


            <p><b>Är du bekant med terminalen och Unix-kommandon sedan tidigare?</b></p>

            <p>Både ja och nej. Jag har varit medveten om att terminalen finns i min dator, dock har jag inte vetat hur den fungerar eller vilken funktion den har i en dator.</p>


            <p><b>Gick det bra att komma igång med kursmomentet rent allmänt?</b></p>

            <p>Ja, dbwebb.se har en väldigt instruerande struktur där det är enkelt att följa det man ska göra uppifrån ner. </p>


            <p><b>Vilken är din TIL för detta kmom?</b></p>

            <p>Jag fick min aha-upplevelse under denna kurs då jag insåg hur PHP integreras i HTML-koden, för att förenkla och samla återkommande koder i en och samma fil.</p>

        </section>


        <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom02</h2>

            <p><b>Beskriv hur väl du kan HTML/CSS (nybörjare, erfaren).</b></p>

            <p>Jag är en nybörjare inom HTML och CSS, förutom att jag har tagit en online-kurs i HTML tidigare. Det mesta i den kursen var dock väldigt mycket teori så vi gjorde inte mycket praktiskt som i att testa sina kunskaper som i denna kurs.</p>


            <p><b>Me-sidan börjar bli en liten webbplats, vad tycker du om dess struktur av filer och kataloger, känns det okey eller ovant?</b></p>

            <p>Katalogerna börjar kännas bekanta nu, efter att ha genomgått övningar och föreläsningar med exempel, börjar man förstå standard-strukturen som filerna och katalogerna ska ha.</p>


            <p><b>Hur bekant är du med PHP och programmering rent allmänt, hur känns det att utveckla med PHP?</b></p>

            <p>PHP är nog ett område där jag behöver fokusera mycket på, för att kunna förstå sambanden mellan HTML och PHP. De sista uppgifterna i lab2 tog mycket längre tid än förväntat då jag inte var van vid att "tänka som en dator", vilket jag behövde utveckla under labbens gång. Med "tänka som en dator"-konceptet menas att den logiken som en dator arbetar efter är svart på vitt, det som står kommer exekveras, eller rapporteras som fel, medan människans logik kan missa vissa "variabler" men ändå skapa en slutbild.</p>


            <p><b>Vad tyckte du om PHP-labben, enkel eller utmanande?</b></p>

            <p>Lab2 var utmanande mot slutet, vilket var roligt också. Att man fick börja tänka till och skapa samband samt utveckla sitt lärande i hur komplex programmering kan vara för att kunna skriva in rätt kod.</p>


            <p><b>Vilken är din TIL för detta kmom?</b></p>

            <p>Mitt TIL för detta kursmoment är från PHP-labben där jag insåg, då jag gjorde While-loopar, att en variabel kan användas på flera olika sätt. Tidigare har jag alltid trott att om jag namnger en variabel så är det enbart den som kan ha det angivna värdet, medan While-looparna lärde mig att jag kan använda om den variabeln och ge den ett nytt värde i samma loop utan att det blir error.</p>

        </section>



            <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom03</h2>

            <p><b>Hur känns det att komma igång med datastrukturer som arrayer? Är det koncept du känner igen sedan tidigare?</b></p>

            <p>Nej, arrayer var ett helt nytt koncept för mig. Jag tycker att det är spännande att se hur man kan samla all data på ett ställe för att sedan ta ut det man behöver med olika funktioner.</p>


            <p><b>Hur känns det med strukturer såsom sidkontroller, multisida och templatefiler?</b></p>

            <p>Det är ett koncept som har varit lite rörigt i början, just kodmässigt och mappstrukturmässigt för att förstå hur man ska få ihop så att man har en bra struktur som är logisk. Men där passar talesättet "övning ger färdighet" in som handen i handsken. Ju fler övningar och strukturer jag försöker få fram, desto mer logiskt blir det. Sedan tycker jag även att det är viktigt att man hittar sin egen personliga touch på hur man gillar att lägga upp strukturen.</p>


            <p><b>Är det något särskild du vill berätta om din me-sida och dess struktur? Något som du är extra nöjd med?</b></p>

            <p>I nuläget är jag väldigt nöjd med att jag har en me-sida. Just att jag har byggt denna från grunden och lyckats inkorporera samtliga övningar på ett tydligt sätt. Det jag dock hade velat göra bättre, i mån om tid, är att ordna upp kodningen lite bättre för att tilldela varje del en klass för att enskilt kunna programmera varje del för sig i sin egen stil.</p>


            <p><b>Får du hjälp och stöd i guiderna (html/css-guiden och php-guiden)?</b></p>

            <p>Absolut får jag det, det är en nyttig grund som man har vid sidan för att förstå funktioner. Programmering är som vilket annat verbalt språk som helst, ex spanska, franska eller tyska. Ju mer man läser om det eller pratar i det, desto fler meningar kan man bygga. Detta hjälper guiderna med.</p>


            <p><b>Vilken är din TIL för detta kmom?</b></p>

            <p>Min TIL för detta kmom är utan tvekan hur jag inkorporerar php-kod i HTML, vilket inte alls var tydligt innan. Det i kombination med skillnaden på att använda php taggen med <i>php</i> jämfört med <i>=</i>, med avseende på att <i>=</i> skriver ut koden på sidan medan <i>php</i> enbart ligger i bakgrunden.</p>


        </section>



            <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom04</h2>
            <p>Här är redovisningstexten</p>
        </section>



            <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom05</h2>
            <p>Här är redovisningstexten</p>
        </section>



            <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom06</h2>
            <p>Här är redovisningstexten</p>
        </section>



            <!-- Redovisningstext för kmom -->
        <section>
            <h2>Kmom07-10</h2>
            <p>Här är redovisningstexten</p>
        </section>



    </article>
</main>
<?php
    include("incl/byline.php");
    include("incl/footer.php");
?>
