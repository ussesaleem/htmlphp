<?php

$pageReference = $_GET["page"] ?? "index";
$base = basename(__FILE__, ".php");
$pages = [
    "index" => [
        "title" => "Multipage",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "print-server" => [
        "title" => "Print the content of \$_SERVER variable.",
        "file" => __DIR__ . "/$base/print-server.php",
    ],
    "length-of-arrays" => [
        "title" => "Prints the length of items in \$_SERVER array.",
        "file" => __DIR__ . "/$base/length-of-arrays.php",
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title.= " | Usamas multipage";

include(__DIR__ . "/incl/header.php");
require __DIR__ . "/incl/multipage.php";
include(__DIR__ . "/incl/byline.php");
include(__DIR__ . "/incl/footer.php");
