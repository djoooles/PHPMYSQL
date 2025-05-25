<?php

    $baza = mysqli_connect("localhost","root","","prvi_cas");
    
    if(mysqli_connect_error())
    {
        die("Desila se greska prilikom konnectovanja na bazu podataka");
    }

    // mysqli_query($baza, "INSERT INTO korisnici (email,lozinka, datum_rodjenja) VALUES ('djolee@gmail.com','0001', 1999-01-01) ");

    $ime = "konj" ;
    $opis = "dobar";
    $cena = 100;
    $dan_nabavke = '2025-01-09';
    $kolicina = 900;

    $baza->query(" INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES ('$ime', '$opis', $cena, '$dan_nabavke', $kolicina) ");








?>