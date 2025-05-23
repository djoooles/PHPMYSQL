<?php 
    $baza = mysqli_connect("localhost","root","","prvi_cas");
    
    if(mysqli_connect_error())
    {
        die("Desila se greska prilikom konektovanja na bazu podataka");
    }
    
    if(!isset($_POST['ime']) || empty($_POST['ime']))
    {
        die("Niste uneli ime proizvoda");
    }
    if(!isset($_POST['opis']) || empty($_POST['opis']))
    {
        die("Niste uneli opis");
    }
    if(!isset($_POST['cena']) || empty($_POST['cena']))
    {
        die("Niste uneli cenu");
    }
    if(!isset($_POST['kolicina']) || empty($_POST['kolicina']) )
    {
        die("Niste uneli kolicinu");
    }
    if(!isset($_POST['dan_nabavke'])|| empty($_POST['dan_nabavke']) )
    {
        die("Niste uneli dan_nabavke");
    }
    
    $imeProizvoda = $_POST['ime'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $kolicina = $_POST['kolicina'];
    $dan_nabavke = $_POST['dan_nabavke'];

    $baza->query("INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES ('$imeProizvoda', '$opis', $cena, '$dan_nabavke',$kolicina ) ");

?>