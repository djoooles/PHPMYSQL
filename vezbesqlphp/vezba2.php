<?php

$baza = mysqli_connect("localhost", "root", "", "prvi_cas");
if(! isset($_POST['product_name']) || empty($_POST['product_name']))
{
    die("Niste uneli proizvod ");
}
elseif(! isset($_POST['price'])|| empty($_POST['price']))
{
    die("Niste uneli cenu");
}
elseif(! isset($_POST['category'])|| empty($_POST['category']))
{
    die("Niste uneli kategoriju");
}

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$category = $_POST['category'];

$baza->query("INSERT INTO products (product_name, price, category) VALUES 
('$product_name', '$price', '$category') ");











?>
