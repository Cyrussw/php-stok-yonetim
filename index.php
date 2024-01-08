<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Sairus | Ürün Yönetim</title>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title is-size-1 has-text-centered">Ürün Ekle</h1>

            <form action="ekle.php" method="post">
                <div class="field">
                    <label class="label">Ürün Adı</label>
                    <div class="control">
                        <input name="urun_adi" class="input" type="text" placeholder="Ürün Adını Giriniz." required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">Ürün Stok Adeti</label>
                    <div class="control">
                        <input name="urun_adet" class="input" type="number" min="1" placeholder="Ürün Stok Adetini Giriniz." required>
                    </div>
                </div>

                <div class="buttons is-centered">
                    <button class="button is-primary">Gönder</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>