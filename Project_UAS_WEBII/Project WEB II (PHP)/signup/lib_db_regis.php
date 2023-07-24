<?php
require_once "config.php";

function tambahSiswa($nama_depan, $nama_belakang, $email, $password, $nomor_telepon, $provinsi, $kota, $alamat, $kode_pos, $level, $status_acc) {
    global $conn;
    
    $query1 = $conn->prepare("INSERT INTO tbl_user (email, password, level, status_acc) VALUES (:email, :password, :level, :status_acc)");
    $query1->execute(array(
        'email' => $email,
        'password' => $password,
        'level' => $level,
        'status_acc' => $status_acc
    ));
    
    $id_user = $conn->lastInsertId(); 
            var_dump($query1->errorInfo());
    $query2 = $conn->prepare("INSERT INTO tbl_data_user (id_user, nama_depan, nama_belakang, nomor_telepon, provinsi, kota, alamat, kode_pos) VALUES (:id_user, :nama_depan, :nama_belakang, :nomor_telepon, :provinsi, :kota, :alamat, :kode_pos)");
    $query2->execute(array(
        'id_user' => $id_user,
        'nama_depan' => $nama_depan,
        'nama_belakang' => $nama_belakang,
        'nomor_telepon' => $nomor_telepon,
        'provinsi' => $provinsi,
        'kota' => $kota,
        'alamat' => $alamat,
        'kode_pos' => $kode_pos
    ));
    var_dump($query2->errorInfo());
    return true;
}



function editSiswa($nama_depan,$nama_belakang, $email, $password, $nomor_telepon, $provinsi, $kota, $alamat, $kode_pos, $gambar) {
 global $conn;

 // Update data in regis table
 $query = $conn->prepare("UPDATE tbl_data_user a JOIN tbl_user b ON a.id_user = b.id_user
    SET a.nama_depan = :nama_depan, 
        a.nama_belakang = :nama_belakang, 
        a.nomor_telepon = :nomor_telepon, 
        a.provinsi = :provinsi, 
        a.kota = :kota, 
        a.alamat = :alamat, 
        a.kode_pos = :kode_pos, 
        a.gambar = :gambar,
        b.password = :password
    WHERE b.email = :email
");
$query->execute(array(
    'nama_depan' => $nama_depan,
    'nama_belakang' => $nama_belakang,
    'email' => $email,
    'nomor_telepon' => $nomor_telepon,
    'provinsi' => $provinsi,
    'kota' => $kota,
    'alamat' => $alamat,
    'kode_pos' => $kode_pos,
    'gambar' => $gambar,
    'password' => $password
));
        var_dump($query->errorInfo());
 return true; 
}



// function hapusKontak($id){
// 	global $conn;
// 	$query = $conn->prepare("DELETE FROM regis	WHERE id = :id");
	
// 	return $query->execute(array(
// 							'id' => $id));
// }


// function findAllKontak(){
// 	global $conn;

// 	$query = $conn->prepare("SELECT * FROM regis");
// 	$query->execute();

// 	return $query->fetchAll();
// }
function findAllKontak1($email){
	global $conn;

	$query = $conn->prepare("SELECT * FROM tbl_data_user r JOIN tbl_user u ON r.id_user = u.id_user WHERE u.email = :email");
	$query->execute(array(
		'email' => $email));

	return $query->fetch();
}


// function findKontakById($id){
// 	global $conn;

// 	$query = $conn->prepare("SELECT * FROM regis WHERE id = :id");
// 	$query->execute(array(
// 		'id'=>$id
// 	));

// 	return $query->fetch();
// }


?>