<?php

    require_once "baza.php";

    $rezultat = $baza->query("SELECT * FROM proizvodi ");
    if($rezultat->num_rows > 0)
    {
        echo "Ukupno smo pronasli proizvoda: " .$rezultat->num_rows;
        $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
    }
    else{
        echo "Nismo nasli nijedan proizvod";
    }
    foreach($proizvodi as $proizvod)
    {
        echo " Jedan ".$proizvod['ime']." Cena mu je ". $proizvod['cena']." "."Na stanju ih imamo ukupno ". $proizvod['kolicina'];
    }















?>