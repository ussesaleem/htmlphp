<?php

$pageReference = $_GET["page"] ?? "session";
$base = basename(__FILE__, ".php");
$pages = [
    "session" => [
        "title" => "Session",
        "file" => __DIR__ . "/session.php",
    ],
    "destroy" => [
        "title" => "Destroy",
        "file" => __DIR__ . "/destroy.php",
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title.= " | Usamas multipage";

include(__DIR__ . "/incl/header.php");
require __DIR__ . "/incl/session_head.php";
include(__DIR__ . "/incl/byline.php");
include(__DIR__ . "/incl/footer.php");
