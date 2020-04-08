<?php

include(__DIR__ . "/multipage/config.php");

include(__DIR__ . "/src/functions.php");

$pageReference = $_GET["page"] ?? "index";
$base = basename(__FILE__, ".php");
$pages = [
    "index" => [
        "title" => "Intro to this multipage.",
        "file" => __DIR__ . "/$base/index.php",
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
$title.= " | Test multipage";

include(__DIR__ . "/view/header.php");

require __DIR__ . "/view/multipage.php";
require __DIR__ . "/view/header.php";
include(__DIR__ . "/view/footer.php");
