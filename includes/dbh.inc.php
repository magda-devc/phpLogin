<?php

$serverName = "localhost";
$dbUsername = "root";
$dBPassword = "Whale rider";
$dBName = "phploginsystem";

$conn = mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect());
}
