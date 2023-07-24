<?php
require_once "../signup/lib_db_regis.php";
// require_once "2.php";

$email = $_SESSION['email'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$password = $_POST['password'];
$nomor_telepon = $_POST['nomor_telepon'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$gambar = $_FILES['foo']['name'];
$gambar_tmp = $_FILES['foo']['tmp_name'];
$target_dir = dirname(__FILE__) . '/gambar/';
$gambar_destination = $target_dir . basename($gambar);
move_uploaded_file($gambar_tmp, $gambar_destination);

if (editSiswa($nama_depan,$nama_belakang, $email, $password, $nomor_telepon, $provinsi, $kota, $alamat, $kode_pos, $gambar)) {
	header('location: profile.php');
} else {
	echo "Data gagal diubah";
}
?>
