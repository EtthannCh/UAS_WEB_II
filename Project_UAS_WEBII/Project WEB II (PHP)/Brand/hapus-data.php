<?php
require "config.php";
require "lib_db_brand.php";


$kode_merk = $_GET['kode_merk'];

if(hapusKontak($kode_merk)){
	header('location: brand.php');
} else {
	echo "data gagal di hapus";
}

?>