<?php
$baza = mysqli_connect("localhost", "root", "", "web_shop");
if(mysqli_connect_error()) {
    die("Došlo je do greške pri povezivanju sa bazom podataka.");
}


?>