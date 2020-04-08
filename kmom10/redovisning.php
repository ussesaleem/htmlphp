<?php
    $title = "Redovisning | BMO";
?>

<article class="about">
    <h2>Redovisning</h2>
    <h4>
        Berätta om din kodstruktur som ligger bakom din webbplats. Du kan tex berätta om katalogstrukturen, konfigfilen,
        funktioner, vyer, sidkontroller respektive multisidkontroller och så vidare.
    </h4>
    <p>
        Kodstrukturen som har använts för att strukturera denna sida är en standard webbsida kombinerat med multipage. För att kunna skapa
        sublänkar till sidorna har multipage-variant behövt användas, vilket kan ses på sidorna Artiklar samt Om. Katalogstrukturen valde jag
        att behålla som vi har lärt oss under kursens gång, då detta var en bra grund att utgå från om man hade behövt gå tillbaka och se hur
        liknande sidor har byggts tidigare. Det jag gjorde för denna sida var att spara en funktion för samtliga objekt/artiklar som jag
        behövde hämta ur databasen. Detta skapade en lång fil med funktioner, men skapade någorlunda ordning i filerna för att kunna hitta
        bland all kod. Jag blev mest imponerad av att jag lärt mig tänka kod under denna kurs, samt att man lyckas göra vissa kopplingar,
        som exempelvis funktionerna som jag har skapat till Objekt-sidan, för att anropa bilder, bildtext samt ägare, hur jag kunnat sammanföra
        dessa delar till en enda funktion för att anropa den på sidan.
    </p>
    <p>
        Svårigheter som jag stötte på då jag skapade denna sida var i början att få sidkontrollerna på plats. Detta tog sin lilla tid då
        jag hade gjort misstaget att lägga in en header i multisidorna, vilket förvirrade läsningen av koden till en början då jag råkade
        ta bort header från fel fil. Detta föranledde till att sidmenyerna hamnade längst upp på sidan, och det tog ca 3h med många frustrerande
        suckar innan man insåg att headern enbart behövde ligga i huvudsidan, och inte i de enskilda multisidorna.
    </p>

    <h4>
        Berätta hur väl din sida fungerar responsivt.
    </h4>
    <p>
        Jag har, så gott det går, försökt att integrera en viss responsivitet i sidan. Detta gjordes i samband med att en sida blev någorlunda
        färdig så skapade jag villkor för responsivitet i @media-delen av CSS. Detta gjorde att man kanske la lite mer tid på en sida innan man
        gick vidare, men då fick man med sig en responsiv sida. Jag har valt att sätta responsiviteten vid 900px, där sidokontrollerna kommer
        att hamna över texten och fylla ut den, istället för att ligga vid sidan.
    </p>

    <h4>
        Ge förslag på ett par förbättringar du ser att man skulle kunna göra på din webbplats, i ett fiktivt vidareutvecklingsprojekt.
    </h4>
    <p>
        Funktions-filen kan förbättras nämnvärt i detta projekt. Det jag har behövt göra i brist på tillräcklig kunskap är att skapa en funktion
        för att anropa olika delar ur databasen. Främst då jag skulle bifoga bilderna till Objekt-sidan, kändes detta av, då jag var tvungen att
        skapa en funktion för varje av de 30 bilder, som jag sedan kunde kalla. Logisk sett så bör det finnas ett sätt att sammanföra dessa
        funktioner till en enda med någon typ av foreach-loop för att få fram den informationen man vill ha fram. Dock hann jag inte riktigt
        sitta och utarbera en sådan funktion med avseende på den redan rådande tidsbristen.
    </p>
    <p>
        Ett annat förbättringsområde som jag har identifierat på denna sida är bilderna vid responsiviteten. Logiken säger att det bör finnas
        något sätt att byta ut bilderna till lägre storlekar som finns tillgängliga i materialet. Det vill säga, vid mindre än 900px, som gäller
        för denna sida, byts bildfilen ut till bildfilen med mindre storlek (alltså inte enbart minska storleken på bilden utan byta bild helt).
    </p>
</article>

<?php
    include("incl/footer.php");
?>
