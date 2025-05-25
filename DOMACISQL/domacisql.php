<?php
$baza = mysqli_connect("localhost", "root", "", "domaci");

if(! isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli email");
}
elseif(! isset($_POST['sifra'])|| empty($_POST['sifru']))
{
    die("Niste uneli sifru");
}
$email = $_POST['email'];
$lozinka = $_POST['sifra'];

$baza->query("INSERT INTO upiszadomaci (email,sifra) VALUES ('$email', '$lozinka')");










?>