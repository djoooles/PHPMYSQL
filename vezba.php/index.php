<?php

    require_once "select.php";

    $rezultat = $baza->query("SELECT * FROM orders");

    if($rezultat->num_rows > 0)
    {
        echo"Ukupno smo nasli korisnika ".$rezultat->num_rows." ";
        $korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);
        foreach($korisnici as $korisnik)
    {
        echo $korisnik['Proizvod']." ".$korisnik['Opis']." ".$korisnik['Kolicina'];
    }
    }
    else{
        echo "Nismo nasli nijednog korisnika";
    }
    
    



















?>