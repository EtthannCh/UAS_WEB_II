<?php
include_once "../signup/config.php";
include_once "lib.php"; 
// include_once "upload.php";

$id = $_POST["id_barang"];
$nama_barang = $_POST["nama_produk"];
$id_kategori = $_POST["id_kategori"];
$id_merek = $_POST["merek"];
$fitur = $_POST["fitur"];
$info_tambahan = $_POST["info_tambahan"];
$content = $_POST["content"];
$harga_awal = $_POST["harga_awal"];
$diskon = $_POST["diskon"];
$jumlah_produk = $_POST["jumlah_produk"];

echo $id ."<br>";
echo $nama_barang . "<br>";
echo $id_kategori . "<br>";
echo $id_merek . "<br>";
echo $fitur . "<br>";
echo $info_tambahan . "<br>";
echo $content . "<br>";
echo $harga_awal . "<br>";
echo $diskon . "<br>";
echo $jumlah_produk . "<br>";
echo $imgName = "1";

if (editData($id, $nama_barang, $id_kategori,$id_merek, $fitur, $info_tambahan, $content, $harga_awal, $diskon, $jumlah_produk, $imgName)) {
    header("location: detail.php");
} else {
    echo "data gagal diedit";
}

?>