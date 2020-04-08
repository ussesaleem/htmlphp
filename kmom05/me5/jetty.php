<?php
include __DIR__ . "/incl/config.php";

$pageReference = $_GET["page"] ?? "jetty";
$base = basename(__FILE__, ".php");
$pages = [
    "jetty" => [
        "title" => "Jetty multipage",
        "file" => __DIR__ . "/$base/jetty.php",
    ],
    "A" => [
        "title" => "A",
        "file" => __DIR__ . "/$base/A.php",
    ],
    "B" => [
        "title" => "B",
        "file" => __DIR__ . "/$base/B.php",
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title.= " | Usamas jettypage";

include(__DIR__ . "/incl/header.php");
require __DIR__ . "/incl/jetty.php";
include(__DIR__ . "/incl/footer.php");
