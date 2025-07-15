<?php 

    if( !isset($_POST['email']) || empty($_POST['email']) )
    {
        die("Niste uneli email!");
    }

    if( !isset($_POST['sifra']) || empty($_POST['sifra']) )
    {
        die("Niste uneli sifru!");
    }

    require_once "baza.php";

    $email = $_POST['email'];
    $sifra = $_POST['sifra'];

    // 1. Proveriti da li korisnik postoji
    // 2. Proveriti da li je sifra dobra
    // 3. Ispisati poruke (dobrodosa/la - korisnik ne postoji - sifra nije tacna)

    $rezultat = $baza->query(" SELECT * FROM korisnici WHERE email = '$email' ");

    if($rezultat->num_rows == 1)
    {
        $korisnik = $rezultat->fetch_assoc();

        // poredimo podataka $sifra iz forme (sifra iz forme 12345)
        // sa podatkom iz baze $2y$10$NgBnoKsZf9lCQltWNsnvbuGQ31Su9KjzhwVWreKj7v7Ldi8bYLiKK
        $verifikovanaSifra = password_verify($sifra, $korisnik['sifra']);
        
        if($verifikovanaSifra == true)
        {
            if(session_status() == PHP_SESSION_NONE)
            {
                session_start();
            }

            $_SESSION['ulogovan'] = true;
            $_SESSION['user_id'] = $korisnik['id'];
            
            header("Location: ../index.php");
        }
        else {
            echo "Sifra nije tacna";
        }

        // Kako da uporedite sifru (hashovanu) iz baze sa sifrom koja je uneta
    }
    else 
    {
        echo "Korisnik ne postoji";
    }