<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "testcrudday1";


$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$conn) {
    echo "error";
    exit;
}