<?php 
require_once '../signup/config.php';

function getCategory(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_kategori");
    $query -> execute();

    return $query -> fetchAll();
}

function tambahDataKat($namaKat, $imgName){
    global $conn;

    $query = $conn -> prepare("INSERT INTO tbl_kategori(nama_kategori, gambar_kategori) VALUES(:nama_kategori, :gambar_kategori)");
    return $query -> execute(array(
        'nama_kategori'=> $namaKat,
        'gambar_kategori' => $imgName));
}

function editDataKat($idKat, $namaKat, $imgName){
    global $conn;

    $query = $conn -> prepare("UPDATE tbl_kategori SET nama_kategori = :nama_kategori, gambar_kategori = :gambar_kategori WHERE id_kategori = :id_kategori");
    return $query -> execute(array(
        'id_kategori'=>$idKat,
        'nama_kategori'=> $namaKat,
        'gambar_kategori' => $imgName));
}
?>
