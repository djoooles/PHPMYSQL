<?php 
if(! isset($_GET['id']) || empty($_GET['id']))
{
    die("Fail ID proizvoda");
}
require_once "baza.php";

$idproizvoda = $_GET['id'];

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = $idproizvoda ");

if($rezultat->num_rows == 0)
{
    die("Ovaj proizvod ne postoji");
}

$proizvod = $rezultat->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><?= $proizvod['ime'] ?></h1>
        <p><?= $proizvod['opis'] ?></p>
        <p>Cena Proizvoda: <?= $proizvod['cena'] ?></p>
        <?php if($proizvod['kolicina'] == 0): ?>
                    <p>Nema na stanju</p>
                <?php else:?>
                <p>Ima na stanju</p>
                <?php endif;?>
        
    </body>
    </html>