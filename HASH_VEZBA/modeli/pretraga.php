<?php
    $baza = mysqli_connect("localhost", "root", "", "domaci");
    if(mysqli_connect_error())
    {
        die("Desila se greska prilikom konekovanja na bazu podataka");
    }
    
    if(! isset($_GET['email']) || empty($_GET['email']))
    {
        die("Niste uneli email");
    }

    $email = $_GET['email'];

    $rezultat = $baza->query("SELECT * FROM upiszadomaci WHERE email LIKE '%$email%' ");
    if($rezultat ->num_rows >= 1)

    {
        echo "Nasli smo ".$rezultat->num_rows." korisnika sa tom email adresom";
    }
    else
    {
        echo "Nema registrovanih korisnika sa tim emailom";
        $baza->query("INSERT INTO upiszadomaci (email) VALUES ('$email')");
    
    }









?>
