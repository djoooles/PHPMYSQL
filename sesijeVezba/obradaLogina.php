<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

$_SESSION['username'] = $_POST['username'];
$_SESSION['sifra'] = $_POST['sifra'];
var_dump($_SESSION['sifra']);




?>