<?php
require('config.php');

$sql = "SELECT * FROM urunler ORDER BY tarih DESC";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Sairus | Ürün Yönetim</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <section class="section">
        <div class="container">
            <h1 class="title is-size-1 has-text-centered">Ürünler</h1>


            <?php
            if ($result->num_rows > 0) {
                ?>
                <div class="columns is-multiline">
                    <?php
                    foreach ($result as $item) {
                        $adi = $item['adi'];
                        $sayi = $item['sayi'];

                        ?>

                        <div class="column is-one-fifth">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        <?php echo $adi; ?>
                                    </p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <?php echo "Ürünün Stok Adeti: " . $sayi; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
                <?php
            } else {
                echo "<br><h1 class='subtitle is-size-4 has-text-centered'>Bir ürün yok! <a href='/'>Ürün Ekle!</a></h1>";
            }
            ?>
        </div>
    </section>
</body>

</html>