<?php
    if(! isset($_POST['ime'])|| empty($_POST['ime']) )
    {
        die("Niste uneli Ime Proizvoda");
    }

    require_once "baza.php";

    $truckNumber = $_POST['ime'];

    $rezultat = $baza->query("SELECT * FROM drivers WHERE truck LIKE '%$truckNumber%' OR 'name' LIKE '%$driverName%' ");

    if($rezultat->num_rows >= 1)
    {
        echo"Ukupan broj vozaca ".$truckNumber. " na sajtu je: ".$rezultat->num_rows." proizvoda";
    }
    else
    {
        echo "Trazeni proizvod ne postoji!";
    }



?>