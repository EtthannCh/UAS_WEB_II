<?php
require "config.php";
require "lib_db_regis.php";

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$email = $_POST['email'];
$password = $_POST['password'];
$nomor_telepon = $_POST['nomor_telepon'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$level = "user";
$status_accc = "aktif";

if (tambahSiswa($nama_depan, $nama_belakang, $email, $password, $nomor_telepon, $provinsi, $kota, $alamat, $kode_pos, $level, $status_acc)) {
    header('Location: ../login/login.php');
} else {
    echo "Data gagal ditambah.";
}

//var_dump($nama_depan, $nama_belakang, $email, $password, $nomor_telepon, $provinsi, $kota, $alamat, $kode_pos, $level);
?>
