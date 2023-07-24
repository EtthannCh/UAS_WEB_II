<?php
require_once '../signup/config.php';
require_once 'lib-db-adminCat.php';
require_once 'upload.php';

$namaKat = $_POST['nama_kategori'];

if(tambahDataKat($namaKat, $imgName))
{
    header('location: Adm-ProductCat.php');
}else{
    echo "data gagal ditambah ke database";
}

?>