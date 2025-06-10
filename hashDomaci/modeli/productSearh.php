<?php  
    if(! isset($_GET['ime'])|| empty($_GET['ime']) )
    {
        die("Niste uneli ime proizvoda");
    }

    require_once "baza.php";

    $ime = $_GET['ime'];

    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE'%$ime%' OR opis LIKE '%$ime%' OR kolicina LIKE '%$ime%'");


    if($rezultat->num_rows >= 1)
    {
        echo "uspesno smo pronasli".$rezultat->num_rows." proizvoda";
    }
    else
    {
        echo"Nismo pronasli nijedan proizvod";
    }

?>