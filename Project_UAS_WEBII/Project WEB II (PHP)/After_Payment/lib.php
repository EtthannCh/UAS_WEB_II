<?php
include_once "conn.php";
function TambahData($nama, $qty, $harga, $gambar)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_cart (gambar_produk, nama_produk, qty_produk, harga_produk) VALUES (:gambar, :Nama, :qty, :harga)");
    return $query->execute(
        array(
            "gambar" => $gambar,
            "Nama" => $nama,
            "harga" => $harga,
            "qty" => $qty,
        )
    );
}
function tambahDesc($desc){
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_cart (descp) VALUES (:descp)");
    $query->bindParam(":descp", $desc, PDO::PARAM_STR);
    return $query->execute();
}
function cariProduk($namaProduk)
{
    global $conn;
    $query = $conn->prepare("SELECT * from tbl_cart where nama_produk = :nama_produk");
    $query->bindParam(":nama_produk", $namaProduk, PDO::PARAM_STR);
    $query->execute(
        array(
            "nama_produk" => $namaProduk,
        )
    );
    $count = $query->rowCount();
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}
function findAllData()
{
    global $conn;
    $query = $conn->prepare("SELECT * from tbl_cart");
    $query->execute();
    return $query->fetchAll();
}

function findAllShippingData()
{
    global $conn;
    $query = $conn->prepare("SELECT * from tbl_pengiriman");
    $query->execute();
    return $query->fetchAll();
}

function findShipping($jenis)
{
    global $conn;
    $query = $conn->prepare("SELECT harga_pengiriman from tbl_pengiriman WHERE jenis_pengiriman = :jenis");
    $query->bindParam(':jenis', $jenis);
    $query->execute();
    return $query->fetch(PDO::FETCH_COLUMN);
}

function setTotalHarga()
{
    global $conn;
    $query = $conn->prepare("SELECT SUM(total_harga) FROM tbl_cart");
    $query->execute();
    return $query->fetch(PDO::FETCH_COLUMN);
}

function updateCart($qty, $Nama)
{
    global $conn;
    // $query = $conn->prepare("SELECT qty FROM tbl_data WHERE Nama= :Nama");
    // $query->execute();
    // $data = $query->fetch();
    $query = $conn->prepare("UPDATE tbl_cart SET qty_produk= :qty, total_harga = qty_produk * harga_produk WHERE nama_produk =:nama_produk");
    return $query->execute(
        array(
            "qty" => $qty,
            "nama_produk" => $Nama,
        )
    );
}

function hapusBarangCart($id){
    global $conn;
    $query = $conn->prepare("DELETE FROM tbl_cart where id_produk = :id_produk");
    $query->bindParam(":id_produk", $id, PDO::PARAM_STR);
    return $query->execute();
}

function updateQtyCart($jumlah, $id){
    global $conn;
    $query = $conn->prepare("UPDATE tbl_cart SET qty_produk = :qty, total_harga = qty_produk * harga_produk WHERE id_produk =:id_produk");
    return $query->execute(array(
        "qty" => $jumlah,
        "id_produk" => $id,
    ));
}

function howManyData()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_cart");
    $query->execute();
    return ($query->rowCount());
}

function setFlashMessage($key, $message)
{
    $_SESSION[$key] = $message;
}

function getFlashMessage($key)
{
    if (isset($_SESSION[$key])) {
        $message = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $message;
    }
    return null;
}

function convertToRupiah($angka)
{
    $hasil = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil;
}