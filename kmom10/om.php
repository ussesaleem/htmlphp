<?php
    $title = "Om sidan | BMO";
    include("incl/header.php");
?>

<?php
$pageReference = $_GET["page"] ?? "about-site";
$base = basename(__FILE__, ".php");
$pages = [
    "about-site" => [
        "title" => "Om sidan",
        "file" => __DIR__ . "/./aboutsite.php",
    ],
    "about-org" => [
        "title" => "Om BMO",
        "file" => __DIR__ . "/./about.php",
    ],
    "site-creator" => [
        "title" => "Om Usama",
        "file" => __DIR__ . "/./usama.php",
    ],
    "redovisning" => [
        "title" => "Redovisning",
        "file" => __DIR__ . "/./redovisning.php",
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title.= " | BMO";

require __DIR__ . "/incl/about.php";
