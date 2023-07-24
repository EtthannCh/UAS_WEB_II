<?php
include_once "../signup/config.php";
include_once "../lib.php";

$status = $_POST["status"];
$_SESSION["status"] = $status;
header("location: index.php");
?>