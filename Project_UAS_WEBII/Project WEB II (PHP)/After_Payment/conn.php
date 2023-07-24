<?php session_start() ;

$server = "localhost";
$user = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=test", $user, $password);

if(!$conn){
    die("tidak terkoneksi");
}
