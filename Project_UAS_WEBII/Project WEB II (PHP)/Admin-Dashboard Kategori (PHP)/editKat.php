<?php
require_once '../signup/config.php';
require_once 'lib-db-adminCat.php';
require_once 'upload.php';
var_dump( $_POST['id_kategori']);

$idKat = $_POST['id_kategori'];
$namaKat = $_POST['nama_kategori'];
// $imgName2 = $_FILES['gambar']['name'];

// $gambar_tmp = $_FILES['gambar']['tmp_name'];
// $target_dir = dirname(__FILE__) . '/gambar/';  
// $gambar_destination = $target_dir . basename($imgName2);
// move_uploaded_file($gambar_tmp, $gambar_destination);

if(editDataKat($idKat, $namaKat, $imgName))
{
    header('location: Adm-ProductCat.php');
}else{
    echo "data gagal ditambah ke database";
}

?>