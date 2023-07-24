<?php
include_once "lib.php";
include_once "upload.php";

if ($_COOKIE["action"] == "hapus") {
    hapusData($_COOKIE["id_barang"]);
    // header("location: detail.php");
}

if ($_COOKIE["action"] == "edit") {
    editData($_COOKIE["id_barang"], $_POST["content"]);
    // header("location: detail.php");
}
$kode_barang = $_POST["kode_barang"];
$nama_barang = $_POST["nama_barang"];
$tipe_barang = $_POST["tipe_barang"];
$merek_barang = $_POST["merek_barang"];
$ukuran_barang = $_POST["ukuran_barang"];
$harga_barang = $_POST["harga_barang"];
$diskon_barang = $_POST["diskon_barang"];
$deskripsi = $_POST["info_tambahan"];

TambahData($kode_barang, $nama_barang, $tipe_barang, $merek_barang, $ukuran_barang, $harga_barang, $diskon_barang, $deskripsi, $imgName);

header("location: detail.php");
?>