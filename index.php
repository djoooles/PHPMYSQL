<?php

    $baza = mysqli_connect("localhost","root","","prvi_cas");
    
    if(mysqli_connect_error())
    {
        die("Desila se greska prilikom konektovanja na bazu podataka");
    }

    $ime = "Mandarina1";
    $opis = "sifra123451";
    $cena = 11;
    $datum_nabavke = "2024-05-03";
    $kolicina = 6;


    $baza->query("INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES ('$ime', '$opis', $cena, '$datum_nabavke', $kolicina) ");























?>