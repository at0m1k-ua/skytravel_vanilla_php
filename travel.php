<?php

include_once "storage.php";

$travels = (new Storage())->getTravels();
$id = $_GET["id"];
$travel = $travels[$id];

if (!$travel) {
    header("Location: /index.php");
}

include 'html/top.html';
echo $travel->getPageHtml();
include 'html/bottom.html';
