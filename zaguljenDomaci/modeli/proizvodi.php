<?php

    if(! isset($_POST['ime'])|| empty($_POST['ime']) )
    {
        die("Niste uneli ime");
    }
    if(! isset($_POST['opis'])|| empty($_POST['opis']) )
    {
        die("Niste uneli opis");
    }
    if(! isset($_POST['cena'])|| empty($_POST['cena']) )
    {
        die("Niste uneli cenu");
    }
    if(! isset($_POST['slika'])|| empty($_POST['slika']) )
    {
        die("Niste uneli sliku");
    }
    if(! isset($_POST['kolicina'])|| empty($_POST['kolicina']) )
    {
        die("Niste uneli kolicinu");
    }
    
    require_once "baza.php";

    $imeProizvoda = $_GET['ime'];
    $opisProizvoda = $_GET['opis'];
    $cenaProizvoda = $_GET['cena'];
    $slikaProizvoda = $_GET['slika'];
    $kolicinaProizvoda = $_GET['kolicina'];

    $baza->query("INSERT INTO proizvodi (id, ime, opis, cena, slika, kolicina) VALUES ('$imeProizvoda','$opisProizvoda','$cenaProizvoda','$slikaProizvoda','$kolicinaProizvoda') ");


?>