<?php
    if(! isset($_POST['email']) || empty($_POST['email']))
    {
        die("Fali vam email");
    }
    if(! isset($_POST['sifra']) || empty($_POST['sifra']))
    {
        die("Fali vam sifra");
    }
    
    require_once "baza.php";

    $email = $_POST['email'];
    $sifra = $_POST['sifra'];

    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email' ");

    if($rezultat->num_rows > 0)
    {
        die("Korisnik sa ovom email adresom vec postoji. Pokusajte sa drugom ");
    }
    else
    {
        $unos = $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email','$sifra') ");
        echo"Uspesno ste se registrovali";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modeli2/login.php" method="post">
        <button>Kliklite ovde da se ulogujete na vas nalog</button>

    </form>
</body>
</html>