<?php

require('config.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $urun_adi = trim($_POST['urun_adi']);
    $urun_adet = $_POST['urun_adet'];

    $sql = "INSERT INTO urunler (adi, sayi, tarih) VALUES ('" . $urun_adi . "', '" . $urun_adet . "', NOW())";

    if ($db->query($sql)) {
        header('Location: urunler.php');
        exit;
    } else {
        echo "Ürün Eklenemedi!";
    }
}

?>