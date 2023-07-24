<?php
require_once '../signup/config.php';

function getCategory($id){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_kategori WHERE id_kategori = :id");
	$query->execute(array(
		'id'=>$id
	));

	return $query->fetchAll();
}

function findCategory(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_kategori");
    $query -> execute();

    return $query -> fetchAll();
}

function getMerkCatalog($id){
    global $conn;
    $query = $conn -> prepare("SELECT DISTINCT tbl_catalog.kode_merk, tbl_merk.nama_merk FROM tbl_catalog JOIN tbl_merk ON tbl_catalog.kode_merk = tbl_merk.kode_merk WHERE tbl_catalog.id_kategori = :id");
	$query->execute(array(
		'id'=>$id
	));

	return $query->fetchAll();
}

function getMerkBySelection($kode){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_merk WHERE kode_merk = :kode");
	$query->execute(array(
		'kode'=>$kode
	));

	return $query->fetch();
}

function getProductCatalog($id_kategori, $kode_merk){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_produk WHERE id_kategori = :id_kategori AND kode_merk = :kode_merk");
	$query->execute(array(
		'id_kategori'=>$id_kategori,
        'kode_merk'=> $kode_merk
	));

	return $query->fetchAll();
}

function getProductBy($kode_produk){
	global $conn;

	$query = $conn -> prepare("SELECT * FROM tbl_produk WHERE kode_produk = :kode_produk");
	$query->execute(array(
		'kode_produk'=>$kode_produk
	));

	return $query->fetch();
}
?>