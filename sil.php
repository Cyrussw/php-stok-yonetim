<?php

require('config.php');

if (isset($_GET['id'])) {
    try {
        $id = $_GET['id'];
        $sql = "DELETE FROM urunler WHERE id = '$id'";

        if ($db->query($sql)) {
            echo "Ürün başarıyla silindi!";
            header("Location: urunler.php");
            exit;
        } else {
            echo "Ürün silinemedi!";
        }
    } catch (Exception $e) {
        echo "Bir hata ile karşılaştık: " . $e->getMessage();
    }
} else {
    echo "Silinecek ürünün idsi tanımlanmamış.";
}


?>