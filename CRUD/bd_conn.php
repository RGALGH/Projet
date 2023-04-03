<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$bd_name = "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$bd_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection failed : " . $e->getMessage());
}
