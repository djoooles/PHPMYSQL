<?php

    require_once "modeli/baza.php";

    $rezultat = $baza->query("SELECT * FROM proizvodi");
    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
    

    //["id"]=> string(1) "1" ["ime"]=> string(9) "Iphone 13" ["opis"]=> string(12) "Dobar Iphone" ["cena"]=> string(7) "1199.99" ["slika"]=> string(14) "IPhonde 13.jpg" ["kolicina"]=> string(1) "0" } 
    //["id"]=> string(1) "2" ["ime"]=> string(9) "Iphone 11" ["opis"]=> string(39) "Iphone 11 kao nov, baba koristila za fb" ["cena"]=> string(6) "989.99" ["slika"]=> string(13) "IPhone 11.jpg" ["kolicina"]=> string(2) "22" } 
    //["id"]=> string(1) "4" ["ime"]=> string(9) "Iphone 11" ["opis"]=> string(3) "Nov" ["cena"]=> string(6) "500.00" ["slika"]=> string(12) "iphone11.jpg" ["kolicina"]=> string(2) "55" } }










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($proizvodi as $proizvod):  ?>
        <div>
            <h1><?= $proizvod['ime']?></h1>
            <p><?=$proizvod['opis']?></p>
            <p>Cena Proizvoda: <?=$proizvod['cena']?></p>
            <p>Na stanju: <?= $proizvod['kolicina']?></p>

            <?php if($proizvod['kolicina'] == 0 ): ?>
                <p>Nema na stanju</p>
            <?php else: ?>
                <p>Ima na stanju</p>
            <?php endif; ?>
            <a href="proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
        </div>
    <?php endforeach;  ?>
</body>
</html>