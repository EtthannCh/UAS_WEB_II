<?php
    require_once 'config.php';

function getDataFromDB(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_user u JOIN tbl_data_user d WHERE u.id_user = d.id_user AND u.email = d.email");
    $query -> execute();

    return $query -> fetchAll();
}

function getDetailUser(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_data_user");
    $query -> execute();

    return $query -> fetchAll();
}

function editData($id_user, $nama_depan, $nama_belakang, $status_acc){
    global $conn;

    $query = $conn -> prepare("UPDATE tbl_user u JOIN tbl_data_user d ON u.id_user = d.id_user SET d.nama_depan = :nama_depan, d.nama_belakang = :nama_belakang, u.status_acc = :status_acc WHERE d.id_user = :id_user");
    return $query->execute(array(
		'id_user'=>$id_user,
        'nama_depan'=>$nama_depan,
        'nama_belakang'=>$nama_belakang,
        'status_acc'=>$status_acc
	));
}

function editDetailCust($id_customer, $nama_depan, $nama_belakang, $nomor_telepon, $alamat, $provinsi, $kota, $kode_pos){
    global $conn;

    $query = $conn -> prepare("UPDATE tbl_data_user SET nama_depan = :nama_depan, nama_belakang = :nama_belakang, nomor_telepon = :nomor_telepon, alamat = :alamat, provinsi = :provinsi, kota = :kota, kode_pos = :kode_pos WHERE id_customer = :id_customer");
    return $query->execute(array(
		'id_customer'=>$id_customer,
        'nama_depan'=>$nama_depan,
        'nama_belakang'=>$nama_belakang,
        'nomor_telepon'=>$nomor_telepon,
        'alamat'=>$alamat,
        'provinsi'=>$provinsi,
        'kota'=>$kota,
        'kode_pos'=>$kode_pos
	));
}

function countAdmin(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_user WHERE level = 'admin'");
    $query -> execute();

    return $query -> fetchAll();
}

function countSale(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_transaksi WHERE DATE(tanggal_transaksi) = CURDATE()");
    $query -> execute();

    return $query -> fetchAll();
}
function countUser(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_user WHERE level = 'user'");
    $query -> execute();

    return $query -> fetchAll();
}

function countBrand(){
    global $conn;

    $query = $conn -> prepare("SELECT * FROM tbl_merk");
    $query -> execute();

    return $query -> fetchAll();
}

?>