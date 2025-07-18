<?php

    require_once "../index.php";


        $bmw = new mojAuto();
        $bmw->marka = "BMW";
        $bmw->model = "E60";
        $bmw->tip = "Limuzina";
        $bmw->tipMotora = "M57";
        $bmw->kubikaza = 2500;
        $bmw->kw = 130;
        $bmw->pogon = "Zadnji";
        $bmw->godiste = 2005;

        $bmw->godineAuta();
?>