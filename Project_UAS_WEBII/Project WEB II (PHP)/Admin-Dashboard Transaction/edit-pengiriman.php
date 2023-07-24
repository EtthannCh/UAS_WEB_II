<?php
include_once "../signup/config.php";
include_once "lib.php";
echo $kode_transaksi = $_POST["hidden_kode"];
echo $id_user = $_POST["hidden_id"];
echo $status_transaksi = $_POST["status_transaksi"];

updateStatusTransaksi($kode_transaksi, $status_transaksi);
header("location: transaksi.php");
?>