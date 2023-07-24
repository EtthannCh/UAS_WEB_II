<?php 
    require_once 'lib-db-adminDash.php';
    require_once '../signup/config.php';
    
    $id_user = $_POST['id_user'];
    $namaDpn = $_POST['nama_depan'];
    $namaBlkg = $_POST['nama_belakang'];
    $status = $_POST['status_user'];
    
    if(editData($id_user, $namaDpn, $namaBlkg, $status)){
        header('location: Adm-UserMenu.php');
    }
    else{
        echo "gagal disimpan ke dalam database!";
    }

?>