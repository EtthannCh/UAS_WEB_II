<?php
include_once "../signup/config.php";
include_once "../lib.php";

$nama_produk = $_POST["nama_produk"];
$id_produk = $_POST["kode"];
$jlh = $_POST["qty"];
$harga = $_POST["harga"];
$gambar = $nama_produk . ".jpg";
$total_harga = $jlh * $harga;
$pengiriman = "";

if (findUser($_SESSION["id_user"], $nama_produk)) {
    updateCart($jlh, $nama_produk);
    header("location: ../Payment_Page/index.php");
} else if (findUser($_SESSION["id_user"], $nama_produk) === false) {
    TambahData($_SESSION["id_user"], $id_produk, $nama_produk, $jlh, $harga, $gambar);
}

?>