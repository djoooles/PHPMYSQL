<?php

if(! isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli email");
}
if(! isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Niste uneli sifru");
}
require_once "baza.php";

$email = $_POST['email'];
$sifra = $_POST['sifra'];

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email' ");

if($rezultat->num_rows == 1)
{
    $korisnik = $rezultat->fetch_assoc();
    $varifikovanaSifra = password_verify($sifra , $korisnik['sifra']);

    if($varifikovanaSifra == true)
    {
        echo "Dobrodosli nazad!";
    }
    else
    {
        echo "Sifra nije tacna";
    }
}
else
{
    echo"Korisnik ne postoji";
}






?>