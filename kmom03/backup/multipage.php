<?php

$pageReference = $_GET["page"] ?? "me";
$base = basename(__FILE__, ".php");
$pages = [
    "me" => [
        "title" => "Me",
        "file" => __DIR__ . "/$base/me.php",
    ],
    "report" => [
        "title" => "Report",
        "file" => __DIR__ . "/$base/report.php",
    ],
    "about" => [
        "title" => "About",
        "file" => __DIR__ . "/$base/about.php",
    ],
    "print-get" => [
        "title" => "Print the content of \$_GET variable.",
        "file" => __DIR__ . "/$base/print-get.php",
    ],
    "get-samples" => [
        "title" => "Try various links using GET queryparams.",
        "file" => __DIR__ . "/$base/get-samples.php",
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
