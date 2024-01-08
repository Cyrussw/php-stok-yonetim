<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "stok";

try {
    $db = new mysqli($host, $username, $password, $database);
} catch (Exception $e) {
    die("Hata: " . $e);
}

?>