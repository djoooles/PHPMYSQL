<?php
if(!isset($_POST['email']) || empty($_POST['email'])) {
    die("Niste uneli Email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra'])) {
    die("Niste uneli Šifru");
}

require_once "baza.php";

$email = mysqli_real_escape_string($baza, $_POST['email']);
$sifra = $_POST['sifra'];

$provera = $baza->query("SELECT * FROM korisnici WHERE email = '$email' LIMIT 1");

if($provera && $provera->num_rows > 0) {
    $korisnik = $provera->fetch_assoc();
    
    $verifikovanaSifra = password_verify($sifra, $korisnik['sifra']);
    if($verifikovanaSifra == true)
    {   if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        $_SESSION['ulogovan'] = true;
        $_SESSION['user_id'] = $korisnik['id'];
        
        header("Location: profil.php");
    }
    else {
        die("Pogrešna šifra! Pokušajte ponovo.");
    }
} else {
    die("Korisnik sa ovim emailom ne postoji!");
}
?>
