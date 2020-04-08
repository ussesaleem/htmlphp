<?php
    $title = "Artiklar | BMO";
    include("incl/header.php");
?>

<?php
$pageReference = $_GET["page"] ?? "articles";
$base = basename(__FILE__, ".php");
$pages = [
    "articles" => [
        "title" => "Artiklar",
        "file" => __DIR__ . "/./articles.php",
    ],
    "articleone" => [
        "title" => "Begravningskonfekt",
        "file" => __DIR__ . "/./articleone.php",
    ],
    "articletwo" => [
        "title" => "Minnestavlor",
        "file" => __DIR__ . "/./articletwo.php",
    ],
    "articlethree" => [
        "title" => "Pärlkransar",
        "file" => __DIR__ . "/./articlethree.php",
    ],
    "articlefour" => [
        "title" => "Begravningsfest och Gravöl",
        "file" => __DIR__ . "/./articlefour.php",
    ],
    "articlefive" => [
        "title" => "Begravningsseder och bruk",
        "file" => __DIR__ . "/./articlefive.php",
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title.= " | BMO";

require __DIR__ . "/incl/content.php";
