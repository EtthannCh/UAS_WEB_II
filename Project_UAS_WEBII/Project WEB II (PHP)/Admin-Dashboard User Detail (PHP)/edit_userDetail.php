<?php 
    require_once 'lib-db-adminDash.php';
    require_once 'config.php';
    
    $id_customer = $_POST['id_customer'];
    $namaDpn = $_POST['nama_depan'];
    $namaBlkg = $_POST['nama_belakang'];
    $noTlp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $prov = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $kodePos = $_POST['kode_pos'];
    
    if(editDetailCust($id_customer, $namaDpn, $namaBlkg, $noTlp, $alamat, $prov, $kota, $kodePos)){
        header('location: Adm-UserMenu2.php');
    }
    else{
        echo "gagal disimpan ke dalam database!";
    }

?>