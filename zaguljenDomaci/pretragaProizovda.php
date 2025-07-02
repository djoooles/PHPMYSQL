<?php
    if(! isset($_POST['ime'])|| empty($_POST['ime']) )
    {
        die("Niste uneli Ime Proizvoda");
    }

    require_once "baza.php";

    $imeProizvoda = $_POST['ime'];

    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$imeProizvoda%' OR opis LIKE '%$imeProizvoda%' OR slika LIKE '%$imeProizvoda%' ");

    if($rezultat->num_rows >= 1)
    {
        echo"Ukupan broj proizvoda ".$imeProizvoda. " na sajtu je: ".$rezultat->num_rows." proizvoda";
    }
    else
    {
        echo "Trazeni proizvod ne postoji!";
    }



?>