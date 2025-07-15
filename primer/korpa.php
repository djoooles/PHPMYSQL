<?php
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }


    if(! isset($_POST['kolicina']) || empty($_POST['kolicina']))
    {
        die("Morate uneti kolicinu");
    }
    if(! isset($_POST['id_proizvoda']) || empty($_POST['id_proizvoda']))
    {
        die("Morate uneti ID Proizvoda");
    }
    
    require_once "modeli/baza.php";

    

    $idProizvoda = $_POST['id_proizvoda'];
    $kolicina = $_POST['kolicina'];

    $idkorisnika = $_SESSION['user_id'];

    
    $rezultat = $baza->query("SELECT cena FROM proizvodi WHERE id = $idProizvoda");
    
    $redIzBaze = $rezultat->fetch_assoc();
    $cena = $redIzBaze['cena'];
    $cena = $cena * $kolicina;

    $idProizvoda = $baza->real_escape_string($idProizvoda);
    $kolicina = $baza->real_escape_string($idProizvoda);
    $cena = $baza->real_escape_string($idProizvoda);
    $$idkorisnika = $baza->real_escape_string($idProizvoda);

    //(id, id_proizvoda, id_korisnika, cena, kolicina) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
    $baza->query("INSERT INTO narudzbine (id_proizvoda, id_korisnika, cena, kolicina) VALUES ('$idProizvoda', '$idkorisnika', '$cena', '$kolicina' ) ");










?>