<?php
include_once "../signup/config.php";
include_once "../lib.php";

$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
$lokasi = $_POST["lokasi"];
$fb = $_POST["fb"];
$tw = $_POST["tw"];
$ig = $_POST["ig"];
$gmail = $_POST["gmail"];
echo $tw, $gmail;
editContact($email, $no_telp, $lokasi, $fb, $tw, $ig, $gmail);
header("location: ../Admin-Main Dashboard (PHP)/AdminDashboard.php");
?>