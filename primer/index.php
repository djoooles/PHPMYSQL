<?php
    require_once "modeli/baza.php";

    // Izvlacimo podatke iz baze
    $rezultat = $baza->query("SELECT * FROM proizvodi");

    // Pretvaramo rezultate u assoc array
    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

    // array(5) { 
    //     ["id"]=> string(1) "1" ["ime"]=> string(9) "iPhone 13" ["opis"]=> string(12) "Dobar iphone" ["cena"]=> string(7) "1199.99" ["slika"]=> string(12) "iPhone13.jpg" ["kolicina"]=> string(2) "55" } 
    //     ["id"]=> string(1) "2" ["ime"]=> string(9) "iPhone 11" ["opis"]=> string(39) "iPhone 11 kao nov, baba koristila za FB" ["cena"]=> string(6) "989.99" ["slika"]=> string(12) "iPhone11.jpg" ["kolicina"]=> string(2) "22" } 
    //     ["id"]=> string(1) "3" ["ime"]=> string(9) "iPhone 15" ["opis"]=> string(46) "100% pravi iPhone, samo niko ne zna da postoji" ["cena"]=> string(7) "2499.99" ["slika"]=> string(15) "nepostojeci.jpg" ["kolicina"]=> string(1) "1" } 
    //     ["id"]=> string(1) "4" ["ime"]=> string(16) "iPhone 14 ProMax" ["opis"]=> string(23) "Ukraden nov iz Austrije" ["cena"]=> string(7) "1999.99" ["slika"]=> string(12) "iPhone14.jpg" ["kolicina"]=> string(2) "66" } 
    //     ["id"]=> string(1) "5" ["ime"]=> string(6) "Jabuka" ["opis"]=> string(24) "Organsko voce, neprskano" ["cena"]=> string(6) "100.00" ["slika"]=> string(10) "jabuka.jpg" ["kolicina"]=> string(3) "100" } }
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require_once "html_delovi/navigacija.php" ?>
        <div class="container d-flex flex-wrap">
            <?php foreach($proizvodi as $proizvod): ?>
                <div class="col-md-4 col-12 p-2 mt-2">
                    <h1><?= $proizvod['ime'] ?></h1>
                    <p><?= $proizvod['opis'] ?></p>
                    <p>Cena proizvoda: <?= $proizvod['cena'] ?></p>
                    <p>Na stanju: <?= $proizvod['kolicina'] ?></p>

                    <?php if($proizvod['kolicina'] == 0): ?>
                        <p>Nema na stanju</p>
                    <?php else: ?>
                        <p>Ima na stanju</p>
                    <?php endif; ?>
                    <a class="btn btn-outline-primary" href="proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
                </div>
            <?php endforeach; ?>
        </div>
    </body>

</html>