<?php

    $baza = mysqli_connect("localhost", "root", "", "school");


    $rezultat = $baza->query("SELECT * FROM classes");
    
    if($rezultat->num_rows > 0)
    {
        echo ("Ukupan imamo: ".$rezultat->num_rows)." Ucenika"."<br>";

        $korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);
        foreach($korisnici as $korisnik)
        {
            echo "Kurs ".$korisnik['course']." predaje profesor ".$korisnik['teacher'].", uceniku po imenu ".$korisnik['students'] ."<br>";
        }
    }
    else{
        echo "Nismo nasli nijednog korisnika";
    }
    








?>