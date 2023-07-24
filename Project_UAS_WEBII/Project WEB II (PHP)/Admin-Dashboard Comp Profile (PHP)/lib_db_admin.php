<?php
require_once "config.php";

// function tambahSiswa($gambar_profile, $gambar_1, $gambar_2,$gambar_3, $isi){
// 	global $conn;
// 	$query = $conn->prepare("INSERT INTO about (gambar_profile, gambar_1, gambar_2, gambar_3, isi) VALUES (:gambar_profile,:gambar_1,:gambar_2,:gambar_3,:isi)");
	
// 	return $query->execute(array(
// 							'gambar_profile' => $gambar_profile,
// 							'gambar_1' => $gambar_1,
//                             'gambar_2' => $gambar_2,
//                             'gambar_3' => $gambar_3,
// 							'isi' => $isi
//                                                                 ));
// }

function editCompProfile($intro, $waktu, $gambar_profile, $gambar_1, $gambar_2, $gambar_3, $isi)
{
    global $conn;
    $query = $conn->prepare("UPDATE about SET intro = :intro, waktu_buka = :waktu_buka, gambar_profile = :gambar_profile, gambar_1= :gambar_1, gambar_2= :gambar_2, gambar_3= :gambar_3, isi= :isi WHERE id = :id");

    return $query->execute(array(
        'intro'=> $intro,
        'waktu_buka' => $waktu,
        'gambar_profile' => $gambar_profile,
        'gambar_1' => $gambar_1,
        'gambar_2' => $gambar_2,
        'gambar_3' => $gambar_3,
        'isi' => $isi,
        'id' => 1 // Assuming the id is always 1
    ));
}

// function hapusKontak($id){
// 	global $conn;
// 	$query = $conn->prepare("DELETE FROM regis	WHERE id = :id");
	
// 	return $query->execute(array(
// 							'id' => $id));
// }


function findAllKontak(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM tbl_merk");
	$query->execute();

	return $query->fetchAll();
}
function findAbout($id){
	global $conn;

	$query = $conn->prepare("SELECT * FROM about WHERE id = :id");
	$query->execute(array(
		'id' => $id));

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