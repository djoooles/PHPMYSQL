<?php
if(! isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli Email");
}
if(! isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Niste uneli Sifru");
}
require_once "baza.php";
$email = $_POST['email'];
$sifra = password_hash($_POST['sifra'],PASSWORD_BCRYPT);


$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email' ");

if($rezultat->num_rows == 0)
{
    echo"Uspesno ste se registrovali";
    $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$sifra') ");
    header("Location: login.php");
}
else
{
    echo"Korisnik ".$email." je vec registrovan, Ulogujte se!";
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
    <br>
    <a href="login.php">Kliknite ovde da se ulogujete</a>
</body>
</html>