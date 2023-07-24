<?php
require_once "../signup/config.php";

function tambahDesk($kode_produk, $nama_produk, $id_kategori,$kode_merk, $fitur, $info_tambahan, $deskripsi, $harga_awal, $diskon,$jumlah_produk,$gambar){
	global $conn;
	$query = $conn->prepare("INSERT INTO tbl_produk (kode_produk, nama_produk, id_kategori, kode_merk, fitur, info_tambahan, deskripsi, harga_awal, diskon,jumlah_produk,gambar) VALUES (:kode_produk,:nama_produk,:id_kategori,:kode_merk,:fitur,:info_tambahan,:deskripsi,:harga_awal,:diskon,:jumlah_produk,:gambar)");
	
	return $query->execute(array(
							'kode_produk' => $kode_produk,
							'nama_produk' => $nama_produk,
                            'id_kategori' => $id_kategori,
                            'kode_merk' => $kode_merk,
							'fitur' => $fitur,
							'info_tambahan' => $info_tambahan,
							'deskripsi' => $deskripsi,
							'harga_awal' => $harga_awal,
							'diskon,' => $diskon,
                            'jumlah_produk,' => $jumlah_produk,
                            'gambar,' => $gambar,
                                                                ));
}

function editSiswa($kode_produk,$nama_produk,$id_kategori,$kode_merk,$fitur,$info_tambahan,$deskripsi,$harga_awal,$gambar){
	global $conn;
	$query = $conn->prepare("UPDATE regis SET  kode_produk = :kode_produk, nama_produk= :nama_produk, id_kategori= :id_kategori, kode_merk= :kodes_merk, fitur= :fitur, info_tambahan= :info_tambahan, deskripsi= :deskripsi, harga_awal= :harga_awal, gambar= :gambar
				WHERE nama_produk = :nama_produk");
	
	return $query->execute(array(

							'kode_produk' => $kode_produk,
							'nama_produk' => $nama_produk,
							'id_kategori' => $id_kategori,
                            'kode_merk' => $kode_merk,
							'fitur' => $fitur,
							'info_tambahan' => $info_tambahan,
							'deskripsi' => $deskripsi,
							'harga_awal' => $harga_awal,
							'gambar' => $gambar));
}

// function hapusKontak($id){
// 	global $conn;
// 	$query = $conn->prepare("DELETE FROM regis	WHERE id = :id");
	
// 	return $query->execute(array(
// 							'id' => $id));
// }


function findAllKontak(){
	global $conn;

	$query = $conn->prepare("SELECT * FROM regis");
	$query->execute();

	return $query->fetchAll();
}

function findProduct($kode_produk, $kode_merk, $id_kategori){
	global $conn;

	$query = $conn->prepare("SELECT * FROM tbl_produk WHERE kode_produk = :kode_produk AND kode_merk = :kode_merk AND id_kategori = :id_kategori");
	$query->execute(array(
		'kode_produk' => $kode_produk,
        'kode_merk' => $kode_merk,
        'id_kategori' => $id_kategori
    ));

	return $query->fetchAll();
}

// function findKontakById($id){
// 	global $conn;

// 	$query = $conn->prepare("SELECT * FROM regis WHERE id = :id");
// 	$query->execute(array(
// 		'id'=>$id
// 	));

// 	return $query->fetch();
// }

// function findUser($id){
// 	global $conn;
// 	$query = $conn->prepare("SELECT * FROM tbl_cart WHERE id_user = :id");
// 	$query->bindParam(":id", $id);
// 	$query->execute();
// 	$count = $query->rowCount();
// 	if($count>0){
// 	 return true;
// 	}
// 	else{
// 	 return false;
// 	}
//    }

   
//    function updateCart($qty, $Nama)
//    {
// 	global $conn;
// 	$query = $conn->prepare("UPDATE tbl_cart SET qty_produk= :qty, total_harga = qty_produk * harga_produk WHERE nama_produk =:nama_produk");
// 	return $query->execute(
// 	 array(
// 	  "qty" => $qty,
// 	  "nama_produk" => $Nama,
// 	 )
// 	);
//    }
//    function howManyData()
//    {
// 	   global $conn;
// 	   $query = $conn->prepare("SELECT * FROM tbl_cart");
// 	   $query->execute();
// 	   return ($query->rowCount());
//    }
   ?>