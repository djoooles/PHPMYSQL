<?php

require_once "klase/Osoba.php";

    $osoba = new Osoba();
    $osoba->ime = "Djordje";
    $osoba->prezime = "Stojkovic";
    $osoba->godinaRodjenja = 1999;
    $osoba->visina = 187;
    $osoba->tezina = 100;
    $osoba->racunajGodine();

?>