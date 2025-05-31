<?php
//Napravio sam novu bazu podataka da bih otezao sebi da vidim kako bi to izgledalo sve
//iz pocetka, inace uradio sam sve ovako samo sam zaboravio da napisem isset proveru to sam dodao kasnije
//inace je sve radilo zapamtio sam proces :D
$baza = mysqli_connect("localhost", "root", "", "domaci");

if(! isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli email");
}
elseif(! isset($_POST['sifra'])|| empty($_POST['sifra']))
{
    die("Niste uneli sifru");
}
$email = $_POST['email'];
$lozinka = password_hash($_POST['sifra'],PASSWORD_BCRYPT);

$rezultat = $baza->query(" SELECT * FROM upiszadomaci WHERE email = '$email' ");

if($rezultat ->num_rows == 1)
{
    die("Vec postoji korisnik sa ovom email adresom");
}
else
{
echo "Uspesno ste se registrovali";
$baza->query("INSERT INTO upiszadomaci (email,sifra) VALUES ('$email', '$lozinka')"); 
}













?>
