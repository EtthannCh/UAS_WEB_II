<?php
include_once "../signup/config.php";

function cariSemuaData()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_produk ORDER BY kode_produk DESC");
    $query->execute();
    return $query->fetchAll();
}

function TambahData($kode_barang, $nama_barang, $tipe_barang, $merek_barang, $ukuran_barang, $harga_barang, $diskon_barang, $deskripsi, $gambar)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_tambah_barang (kode_barang, nama, tipe, merek,
    ukuran, harga, diskon, deskripsi, gambar) 
    VALUES (:kode, :nama, :tipe, :merek,:ukuran_barang, :harga_barang, :diskon_barang, :deskripsi, :gambar)");
    return $query->execute(
        array(
            "kode" => $kode_barang,
            "nama" => $nama_barang,
            "tipe" => $tipe_barang,
            "merek" => $merek_barang,
            "ukuran_barang" => $ukuran_barang,
            "harga_barang" => $harga_barang,
            "diskon_barang" => $diskon_barang,
            "deskripsi" => $deskripsi,
            "gambar" => $gambar,
        )
    );
}

function hapusData($id)
{
    global $conn;
    $query = $conn->prepare("DELETE FROM tbl_produk WHERE kode_produk = :id");
    $query->bindParam(":id", $id);
    return $query->execute();
}

function editData($id, $nama_barang, $id_kategori, $id_merek, $fitur, $info_tambahan, $content, $harga_awal, $diskon, $jumlah_produk, $imgName)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_produk SET nama_produk = :nama, id_kategori = :id_kategori, kode_merk = :id_merek,
    fitur = :fitur, info_tambahan = :info_tambahan, deskripsi = :content, harga_awal = :harga_awal, diskon = :diskon, jumlah_produk = :jumlah_produk, gambar = :gambar WHERE kode_produk = :id");
    $query->bindParam(":id", $id);
    $query->bindParam(":nama", $nama_barang);
    $query->bindParam(":id_kategori", $id_kategori);
    $query->bindParam(":id_merek", $id_merek);
    $query->bindParam(":fitur", $fitur);
    $query->bindParam(":info_tambahan", $info_tambahan);
    $query->bindParam(":content", $content);
    $query->bindParam(":harga_awal", $harga_awal);
    $query->bindParam(":diskon", $diskon);
    $query->bindParam(":jumlah_produk", $jumlah_produk);
    $query->bindParam(":gambar", $imgName);
    return $query->execute();
    // check if there are any database related errors 
    // if(!$query->execute()){
    //     $err = $query->errorInfo();
    //     echo "database error " . $err[2];
    // }
}

function findBarangById($id)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_produk where kode_produk = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}
;

function editContact($email, $no, $lokasi, $facebook, $twitter, $instagram, $gmail)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_contact_us set email = :email, no_telp = :nomor, Lokasi = :lokasi, facebook = :facebook, twitter = :twitter, instagram = :instagram, gmail = :gmail where id = 1");
    return $query->execute(
        array(
            "email" => $email,
            "nomor" => $no,
            "lokasi" => $lokasi,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "gmail" => $gmail,
        )
    );
}
;

function findContact()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_contact_us where id = 1");
    $query->execute();
    return $query->fetch();
}
;

function findAllTransaksi()
{
    global $conn;
    $query = $conn->prepare("SELECT * from tbl_transaksi");
    $query->execute();
    return $query->fetchAll();
}

function convertToRupiah($angka)
{
    $hasil = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil;
}
?>