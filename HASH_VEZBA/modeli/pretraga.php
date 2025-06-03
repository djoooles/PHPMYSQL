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

    $rezultat = $baza->query("SELECT * FROM upiszadomaci WHERE email = '$email' ");
    if($rezultat ->num_rows >= 1)

    {
        die("Nasli smo korisnika sa tim emailom");
    }
    else
    {
        echo "Nema registrovanih korisnika sa tim emailom";
        $baza->query("INSERT INTO upiszadomaci (email) VALUES ('$email')");
    
    }









?>