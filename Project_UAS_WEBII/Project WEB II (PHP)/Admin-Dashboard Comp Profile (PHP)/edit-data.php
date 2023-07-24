<?php
require_once "lib_db_admin.php";

$intro = $_POST['intro'];
$waktu = $_POST['waktu_buka'];
$gambar_profile = $_FILES['gambar_profile']['name'];
$gambar_1 = $_FILES['gambar_1']['name'];
$gambar_2 = $_FILES['gambar_2']['name'];
$gambar_3 = $_FILES['gambar_3']['name'];
$isi = $_POST['isi'];

if (editCompProfile($intro, $waktu, $gambar_profile, $gambar_1, $gambar_2, $gambar_3, $isi)) {
    header('location: about_us.php');
} else {
    echo "data gagal di tambah";
}
?>
