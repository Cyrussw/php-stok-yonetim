<?php

$host = "";
$username = "";
$password = "";
$database = "";

try {
    $db = new mysqli($host, $username, $password, $database);
} catch (Exception $e) {
    die("Hata: " . $e);
}

?>
