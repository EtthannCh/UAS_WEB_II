<?php
require_once "../signup/config.php";

function tambahSiswa($kode_merk, $nama_merk, $gambar) {
    global $conn;

    $query = "INSERT INTO tbl_merk (kode_merk, nama_merk, gambar) VALUES (:kode_merk, :nama_merk, :gambar)";
    $stmt = $conn->prepare($query);
	$stmt->bindParam(':kode_merk', $kode_merk);
    $stmt->bindParam(':nama_merk', $nama_merk);
    $stmt->bindParam(':gambar', $gambar);

    return $stmt->execute();

}


// function editSiswa($kode_merk, $nama_merk, $gambar, $gambar_3, $isi)
// {
//     global $conn;
//     $query = $conn->prepare("UPDATE about SET i$kode_merk = :i$kode_merk, nama_merk= :nama_merk, gambar= :gambar, gambar_3= :gambar_3, isi= :isi WHERE kode_merk = :kode_merk");

//     return $query->execute(array(
//         'i$kode_merk' => $kode_merk,
//         'nama_merk' => $nama_merk,
//         'gambar' => $gambar,
//         'gambar_3' => $gambar_3,
//         'isi' => $isi,
//         'kode_merk' => 1 // Assuming the kode_merk is always 1
//     ));
// }

function hapusKontak($kode_merk){
	global $conn;
	$query = $conn->prepare("DELETE FROM tbl_merk	WHERE kode_merk = :kode_merk");
	
	return $query->execute(array(
							'kode_merk' => $kode_merk));
}


function findAllKontak(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM tbl_merk");
	$query->execute();

	return $query->fetchAll();
}
// function findAllKontak1($kode_merk){
// 	global $conn;

// 	$query = $conn->prepare("SELECT * FROM about WHERE kode_merk = :kode_merk");
// 	$query->execute(array(
// 		'kode_merk' => $kode_merk));

// 	return $query->fetch();
// }

// function findKontakById($kode_merk){
// 	global $conn;

// 	$query = $conn->prepare("SELECT * FROM regis WHERE kode_merk = :kode_merk");
// 	$query->execute(array(
// 		'kode_merk'=>$kode_merk
// 	));

// 	return $query->fetch();
// }


?>