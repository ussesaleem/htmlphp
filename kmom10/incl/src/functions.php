<?php

function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function printArticles($res)
{
    $rows = "";
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>" . htmlentities($row['title']) . "</td>";
        $rows .= "<td>" . htmlentities($row['author']) . "</td>";
        $rows .= "<td>" . htmlentities($row['pubdate']) . "</td>";
        $rows .= "</tr>\n";
    }
    echo <<<EOD
    <table>
    <thead>
    <tr>
        <th>Ämne</th>
        <th>Författare</th>
        <th>Publiceringsdatum</th>
    </tr>
    </thead>
    <tbody>
    $rows
    </tbody>
    </table>
EOD;
}

function printAbout($res)
{
    echo "<p><i>" . $res[3]['pubdate'] . "</i></p>";
    echo $res[3]['content'];
}

function printContentOne($res)
{
    echo $res[0]['content'];
}

function printContentTwo($res)
{
    echo $res[1]['content'];
}

function printContentThree($res)
{
    echo $res[2]['content'];
}

function printContentFour($res)
{
    echo $res[4]['content'];
}

function printContentFive($res)
{
    echo $res[5]['content'];
}

function printArticleOneTitle($res)
{
    echo $res[0]['title'];
}

function printArticleTwoTitle($res)
{
    echo $res[1]['title'];
}

function printArticleThreeTitle($res)
{
    echo $res[2]['title'];
}

function printArticleFourTitle($res)
{
    echo $res[4]['title'];
}

function printArticleFiveTitle($res)
{
    echo $res[5]['title'];
}

function printArticleOneAuthor($res)
{
    echo $res[0]['author'];
}

function printArticleTwoAuthor($res)
{
    echo $res[1]['author'];
}

function printArticleThreeAuthor($res)
{
    echo $res[2]['author'];
}

function printArticleFourAuthor($res)
{
    echo $res[4]['author'];
}

function printArticleFiveAuthor($res)
{
    echo $res[5]['author'];
}

function printArticleOneDate($res)
{
    echo $res[0]['pubdate'];
}

function printArticleTwoDate($res)
{
    echo $res[1]['pubdate'];
}

function printArticleThreeDate($res)
{
    echo $res[2]['pubdate'];
}

function printArticleFourDate($res)
{
    echo $res[4]['pubdate'];
}

function printArticleFiveDate($res)
{
    echo $res[5]['pubdate'];
}

function printObject($res)
{
    $rows = "";
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>" . htmlentities($row['id']) . "</td>";
        $rows .= "<td>" . htmlentities($row['title']) . "</td>";
        $rows .= "<td>" . htmlentities($row['category']) . "</td>";
        $rows .= "<td>" . htmlentities($row['text']) . "</td>";
        $rows .= "<td>" . htmlentities($row['image']) . "</td>";
        $rows .= "<td>" . htmlentities($row['owner']) . "</td>";
        $rows .= "</tr>\n";
    }
    echo <<<EOD
    <table>
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>category</th>
        <th>text</th>
        <th>image</th>
        <th>owner</th>
    </tr>
    </thead>
    <tbody>
    $rows
    </tbody>
    </table>
EOD;
}

function printObjectOne($res)
{
    echo "<p><b>" . $res[0]['title'] . "</b></p>";
    echo "(Ägare: " . $res[0]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_anglar_x4.jpg" alt="begravningskonfekt_anglar_x4"><br>
EOD;
    echo "<i>" . $res[0]['text'] . "</i><br>";
}

function printObjectTwo($res)
{
    echo "<p><b>" . $res[1]['title'] . "</b></p>";
    echo "(Ägare: " . $res[1]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_hogre_stand.jpg" alt="begravningskonfekt_hogre_stand"><br>
EOD;
    echo "<i>" . $res[1]['text'] . "</i><br>";
}

function printObjectThree($res)
{
    echo "<p><b>" . $res[2]['title'] . "</b></p>";
    echo "(Ägare: " . $res[2]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_madonna_maria_o_jesus.jpg" alt="begravningskonfekt_madonna_maria_o_jesus"><br>
EOD;
    echo "<i>" . $res[2]['text'] . "</i><br>";
}

function printObjectFour($res)
{
    echo "<p><b>" . $res[3]['title'] . "</b></p>";
    echo "(Ägare: " . $res[3]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_svart_tro_hopp_karlek.jpg" alt="begravningskonfekt_svart_tro_hopp_karlek"><br>
EOD;
    echo "<i>" . $res[3]['text'] . "</i><br>";
}

function printObjectFive($res)
{
    echo "<p><b>" . $res[4]['title'] . "</b></p>";
    echo "(Ägare: " . $res[4]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_svart_tro_hopp_karlekx2.jpg" alt="begravningskonfekt_svart_tro_hopp_karlekx2"><br>
EOD;
    echo "<i>" . $res[4]['text'] . "</i><br>";
}

function printObjectSix($res)
{
    echo "<p><b>" . $res[5]['title'] . "</b></p>";
    echo "(Ägare: " . $res[5]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_tro_hopp_karlek_samt_grav.jpg" alt="begravningskonfekt_tro_hopp_karlek_samt_grav"><br>
EOD;
    echo "<i>" . $res[5]['text'] . "</i><br>";
}

function printObjectSeven($res)
{
    echo "<p><b>" . $res[6]['title'] . "</b></p>";
    echo "(Ägare: " . $res[6]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningskonfekt_x3_maria_jesus_samt_madonna.jpg" alt="begravningskonfekt_x3_maria_jesus_samt_madonna"><br>
EOD;
    echo "<i>" . $res[6]['text'] . "</i><br>";
}

function printObjectEight($res)
{
    echo "<p><b>" . $res[7]['title'] . "</b></p>";
    echo "(Ägare: " . $res[7]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningssked_lars_palmberg.jpg" alt="begravningssked_lars_palmberg"><br>
EOD;
    echo "<i>" . $res[7]['text'] . "</i><br>";
}

function printObjectNine($res)
{
    echo "<p><b>" . $res[8]['title'] . "</b></p>";
    echo "(Ägare: " . $res[8]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningstal_eric_crispin_segercronas.jpg" alt="begravningstal_eric_crispin_segercronas"><br>
EOD;
    echo "<i>" . $res[8]['text'] . "</i><br>";
}

function printObjectTen($res)
{
    echo "<p><b>" . $res[9]['title'] . "</b></p>";
    echo "(Ägare: " . $res[9]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningstal_marten_cronstierna.jpg" alt="begravningstal_marten_cronstierna"><br>
EOD;
    echo "<i>" . $res[9]['text'] . "</i><br>";
}

function printObjectEleven($res)
{
    echo "<p><b>" . $res[10]['title'] . "</b></p>";
    echo "(Ägare: " . $res[10]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/begravningstarta.jpg" alt="begravningstarta"><br>
EOD;
    echo "<i>" . $res[10]['text'] . "</i><br>";
}

function printObjectTwelve($res)
{
    echo "<p><b>" . $res[11]['title'] . "</b></p>";
    echo "(Ägare: " . $res[11]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/gravol.jpg" alt="gravol"><br>
EOD;
    echo "<i>" . $res[11]['text'] . "</i><br>";
}

function printObjectThirteen($res)
{
    echo "<p><b>" . $res[12]['title'] . "</b></p>";
    echo "(Ägare: " . $res[12]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/portvin_med_glas.jpg" alt="portvin_med_glas"><br>
EOD;
    echo "<i>" . $res[12]['text'] . "</i><br>";
}

function printObjectFourteen($res)
{
    echo "<p><b>" . $res[13]['title'] . "</b></p>";
    echo "(Ägare: " . $res[13]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/inbjudningsbrev_johan_august_lang.jpg" alt="inbjudningsbrev_johan_august_lang"><br>
EOD;
    echo "<i>" . $res[13]['text'] . "</i><br>";
}

function printObjectFifteen($res)
{
    echo "<p><b>" . $res[14]['title'] . "</b></p>";
    echo "(Ägare: " . $res[14]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/inbjudningsbrev_johan_nikolaus_ekstrand.jpg" alt="inbjudningsbrev_johan_nikolaus_ekstrand"><br>
EOD;
    echo "<i>" . $res[14]['text'] . "</i><br>";
}

function printObjectSixteen($res)
{
    echo "<p><b>" . $res[15]['title'] . "</b></p>";
    echo "(Ägare: " . $res[15]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_anders_petters.jpg" alt="minnestavla_anders_petters"><br>
EOD;
    echo "<i>" . $res[15]['text'] . "</i><br>";
}

function printObjectSeventeen($res)
{
    echo "<p><b>" . $res[16]['title'] . "</b></p>";
    echo "(Ägare: " . $res[16]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_anna_persson.jpg" alt="minnestavla_anna_persson"><br>
EOD;
    echo "<i>" . $res[16]['text'] . "</i><br>";
}

function printObjectEighteen($res)
{
    echo "<p><b>" . $res[17]['title'] . "</b></p>";
    echo "(Ägare: " . $res[17]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_pas.jpg" alt="minnestavla_pas"><br>
EOD;
    echo "<i>" . $res[17]['text'] . "</i><br>";
}

function printObjectNineteen($res)
{
    echo "<p><b>" . $res[18]['title'] . "</b></p>";
    echo "(Ägare: " . $res[18]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_epad.jpg" alt="minnestavla_epad"><br>
EOD;
    echo "<i>" . $res[18]['text'] . "</i><br>";
}

function printObjectTwenty($res)
{
    echo "<p><b>" . $res[19]['title'] . "</b></p>";
    echo "(Ägare: " . $res[19]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_eug.jpg" alt="minnestavla_eug"><br>
EOD;
    echo "<i>" . $res[19]['text'] . "</i><br>";
}

function printObjectTwentyOne($res)
{
    echo "<p><b>" . $res[20]['title'] . "</b></p>";
    echo "(Ägare: " . $res[20]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_granstorp.jpg" alt="minnestavla_granstorp"><br>
EOD;
    echo "<i>" . $res[20]['text'] . "</i><br>";
}

function printObjectTwentyTwo($res)
{
    echo "<p><b>" . $res[21]['title'] . "</b></p>";
    echo "(Ägare: " . $res[21]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_sus.jpg" alt="minnestavla_sus"><br>
EOD;
    echo "<i>" . $res[21]['text'] . "</i><br>";
}

function printObjectTwentyThree($res)
{
    echo "<p><b>" . $res[22]['title'] . "</b></p>";
    echo "(Ägare: " . $res[22]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/minnestavla_uss.jpg" alt="minnestavla_uss"><br>
EOD;
    echo "<i>" . $res[22]['text'] . "</i><br>";
}

function printObjectTwentyFour($res)
{
    echo "<p><b>" . $res[23]['title'] . "</b></p>";
    echo "(Ägare: " . $res[23]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_blomma.jpg" alt="parlkrans_blomma"><br>
EOD;
    echo "<i>" . $res[23]['text'] . "</i><br>";
}

function printObjectTwentyFive($res)
{
    echo "<p><b>" . $res[24]['title'] . "</b></p>";
    echo "(Ägare: " . $res[24]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_handslag.jpg" alt="parlkrans_handslag"><br>
EOD;
    echo "<i>" . $res[24]['text'] . "</i><br>";
}

function printObjectTwentySix($res)
{
    echo "<p><b>" . $res[25]['title'] . "</b></p>";
    echo "(Ägare: " . $res[25]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_jesus_bild.jpg" alt="parlkrans_jesus_bild"><br>
EOD;
    echo "<i>" . $res[25]['text'] . "</i><br>";
}

function printObjectTwentySeven($res)
{
    echo "<p><b>" . $res[26]['title'] . "</b></p>";
    echo "(Ägare: " . $res[26]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_jesus_golgata.jpg" alt="parlkrans_jesus_golgata"><br>
EOD;
    echo "<i>" . $res[26]['text'] . "</i><br>";
}

function printObjectTwentyEight($res)
{
    echo "<p><b>" . $res[27]['title'] . "</b></p>";
    echo "(Ägare: " . $res[27]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_jesus_med_tornkrans.jpg" alt="parlkrans_jesus_med_tornkrans"><br>
EOD;
    echo "<i>" . $res[27]['text'] . "</i><br>";
}

function printObjectTwentyNine($res)
{
    echo "<p><b>" . $res[28]['title'] . "</b></p>";
    echo "(Ägare: " . $res[28]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_jesus_pa_korset.jpg" alt="parlkrans_jesus_pa_korset"><br>
EOD;
    echo "<i>" . $res[28]['text'] . "</i><br>";
}

function printObjectThirty($res)
{
    echo "<p><b>" . $res[29]['title'] . "</b></p>";
    echo "(Ägare: " . $res[29]['owner'] . ")" . "<br><br>";
    echo <<<EOD
    <img src="img/250x250/parlkrans_korsfast_jesus.jpg" alt="parlkrans_korsfast_jesus"><br>
EOD;
    echo "<i>" . $res[29]['text'] . "</i><br>";
}
