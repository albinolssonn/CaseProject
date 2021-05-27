<?php

$host = 'localhost'; 
$db_name = 'carshop'; 
$username = 'root'; 
$password = ''; 
$conn = mysqli_connect($host, $db_name, $username, $password); 

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
