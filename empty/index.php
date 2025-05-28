<?php
    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(! isset($_POST['title']) || empty($_POST['title']))
    {
        die("Niste uneli title");
    }
    if(! isset($_POST['author']) || empty($_POST['author']))
    {
        die("Niste uneli authora");
    }
    if(! isset($_POST['published_year']) || empty($_POST['published_year']))
    {
        die("Niste uneli published_year");
    }

    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];

    $baza->query("INSERT INTO books (title, author, published_year) VALUES ('$title', '$author', '$published_year') ")








?>