<?php

include_once "storage.php";

$travels = (new Storage())->getTravels();

$name = $_POST["name"];
$travel_id = $_POST["travel_id"];
$phone = $_POST["phone"];
$email = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        $name && $travels[$travel_id] && $phone && $email) {
    fputcsv(fopen('orders.csv', 'a'), [$name, $travel_id, $phone, $email]);
}

header("Location: /index.php");
