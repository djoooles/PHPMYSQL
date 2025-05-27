<?php
    $baza = mysqli_connect("localhost","root","","web_shop");
    if(! isset($_POST['first_name']) || empty($_POST['first_name']))
    {
        die("Nisi uneo Ime !");
    }
    if(! isset($_POST['last_name']) || empty($_POST['last_name']))
    {
        die("Nisi uneo Prezime !");
    }
    if(! isset($_POST['email']) || empty($_POST['email']))
    {
        die("Nisi uneo Email !");
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $baza->query("INSERT INTO customers (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email') ")













?>  