<?php

    if(! isset($_GET['ime'])|| empty($_GET['ime']) )
    {
        die("Niste uneli ime");
    }
    if(! isset($_GET['opis'])|| empty($_GET['opis']) )
    {
        die("Niste uneli opis");
    }
    if(! isset($_GET['cena'])|| empty($_GET['cena']) )
    {
        die("Niste uneli cenu");
    }
    if(! isset($_GET['slika'])|| empty($_GET['slika']) )
    {
        die("Niste uneli sliku");
    }
    if(! isset($_GET['kolicina'])|| empty($_GET['kolicina']) )
    {
        die("Niste uneli kolicinu");
    }
    
    require_once "baza.php";

    $imeProizvoda = $_GET['ime'];
    $opisProizvoda = $_GET['opis'];
    $cenaProizvoda = $_GET['cena'];
    $slikaProizvoda = $_GET['slika'];
    $kolicinaProizvoda = $_GET['kolicina'];

    $baza->query("INSERT INTO proizvodi (ime, opis, cena, slika, kolicina) VALUES ('$imeProizvoda','$opisProizvoda','$cenaProizvoda','$slikaProizvoda','$kolicinaProizvoda') ");

    

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pretraga Proizvoda</title>
    </head>
    <body>
        <p>Uspesno ste uneli proizvod:<br> <?php echo"Ime proizvoda: ".$imeProizvoda ?>
        <p>Opis proizvoda: <?php echo $opisProizvoda; ?> </p>
        <p>Cena proizvoda: <?php echo $cenaProizvoda; ?> </p>
        <p>Slika proizvoda: <?php echo $slikaProizvoda; ?> </p>
        <p>Kolicina proizvoda: <?php echo $kolicinaProizvoda; ?> </p>
        <a href="profil.php">Nazad na unos Proizvoda</a>
        <p>Pretraga Proizvoda</p>
        <form action="pretragaProizovda.php" method="post">
            <input type="text" name="ime" placeholder="Unesite Ime proizvoda">
            <button>Pretrazi</button>
        </form>
    </body>
    </html>