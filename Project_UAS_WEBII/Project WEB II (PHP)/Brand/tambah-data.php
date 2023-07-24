<?php
require "config.php";
require "lib_db_brand.php";


$kode_merk = $_POST['kode_merk'];
$nama_merk = $_POST['nama_merk'];
$gambar = $_FILES['gambar']['name'];

$gambar_tmp = $_FILES['gambar']['tmp_name'];
$target_dir = dirname(__FILE__) . '/img/';  // Path to 'gambar' folder in the same directory
$gambar_destination = $target_dir . basename($gambar);
// Hash the password

move_uploaded_file($gambar_tmp, $gambar_destination);
if (tambahSiswa($kode_merk, $nama_merk, $gambar)) {
    header('location: brand.php');
} else {
    echo "data gagal ditambah";
}

?>
