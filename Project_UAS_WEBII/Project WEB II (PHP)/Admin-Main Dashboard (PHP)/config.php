<?php
session_start();

$server = 'localhost';
$user = 'root';
$password = '';

$conn = new PDO("mysql:host=localhost; dbname=project_webii", $user, $password);

if(!$conn){
    die("Database tidak terkoneksi!");
}
?>