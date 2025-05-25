<?php

$baza = mysqli_connect("localhost", "root", "", "prvi_cas");

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$category = $_POST['category'];

$baza->query("INSERT INTO products (product_name, price, category) VALUES 
('$product_name', '$price', '$category') ");











?>