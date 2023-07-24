<?php
include_once "../signup/config.php";
function TambahData($id, $id_produk, $nama, $qty, $harga, $gambar)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_cart (id_user, id_produk, nama_produk, qty_produk, harga_produk, gambar_produk, total_harga ,pengiriman) 
 VALUES (:id_user ,:id_produk, :Nama, :qty, :harga, :gambar, :total ,'a')");
    return $query->execute(
        array(
            "id_user" => $id,
            "id_produk" => $id_produk,
            "Nama" => $nama,
            "qty" => $qty,
            "harga" => $harga,
            "gambar" => $gambar,
            "total" => $harga * $qty,
        )
    );
}


function tambahDesc($desc)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_cart (descp) VALUES (:descp)");
    $query->bindParam(":descp", $desc, PDO::PARAM_STR);
    return $query->execute();
}
function cariProduk($namaProduk)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_cart WHERE nama_produk = :nama_produk");
    $query->bindParam(":nama_produk", $namaProduk);
    $query->execute();
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

function findDataById($id)
{
    global $conn;
    $query = $conn->prepare("SELECT * from tbl_cart WHERE id_user = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetchAll();
}

function findUser($id, $nama_produk)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_cart WHERE id_user = :id AND nama_produk = :nama_produk");
    $query->bindParam(":id", $id);
    $query->bindParam(":nama_produk", $nama_produk);
    $query->execute();
    $count = $query->rowCount();
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function findProduct($kode_produk, $kode_merk, $id_kategori)
{
    global $conn;

    $query = $conn->prepare("SELECT * FROM tbl_produk WHERE kode_produk = :kode_produk AND kode_merk = :kode_merk AND id_kategori = :id_kategori");
    $query->execute(
        array(
            'kode_produk' => $kode_produk,
            'kode_merk' => $kode_merk,
            'id_kategori' => $id_kategori
        )
    );

    return $query->fetchAll();
}

function findAllKontak1($kode_produk)
{
    global $conn;
    $query = $conn->prepare("SELECT kode_produk, nama_produk,fitur,info_tambahan,deskripsi_topik,deskripsi,harga_awal,diskon,gambar FROM tbl_barang WHERE kode_produk = :kode_produk");
    $query->execute(
        array(
            'kode_produk' => $kode_produk
        )
    );

    return $query->fetch();
}

function findAllKontakByEmail($email)
{
    global $conn;

    $query = $conn->prepare("SELECT * FROM regis WHERE email = :email");
    $query->execute(
        array(
            'email' => $email
        )
    );

    return $query->fetch();
}

function filterTransaksi($status)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_transaksi WHERE status_transaksi = :status_transaksi");
    $query->bindParam(":status_transaksi", $status);
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

function findTotalHarga($id)
{
    global $conn;
    $query = $conn->prepare("SELECT SUM(total_harga) from tbl_cart WHERE id_user = :id");
    $query->bindParam(":id", $id);
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

function cariBarangCart($id_user)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_cart WHERE id_user = :id");
    $query->bindParam(":id", $id_user);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
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

function hapusBarangCart($id)
{
    global $conn;
    $query = $conn->prepare("DELETE FROM tbl_cart where id_produk = :id_produk");
    $query->bindParam(":id_produk", $id, PDO::PARAM_STR);
    return $query->execute();
}

function hapusKontak($id)
{
    global $conn;
    $query = $conn->prepare("DELETE FROM regis WHERE id = :id");

    return $query->execute(
        array(
            'id' => $id
        )
    );
}

function updateQtyCart($jumlah, $id, $pengiriman)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_cart SET qty_produk = :qty, total_harga = qty_produk * harga_produk, pengiriman = :pengiriman WHERE id_produk =:id_produk");
    return $query->execute(
        array(
            "qty" => $jumlah,
            "id_produk" => $id,
            "pengiriman" => $pengiriman
        )
    );
}

function updatePengiriman($id_user, $pengiriman)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_cart SET pengiriman = :pengiriman WHERE id_user =:id_user");
    return $query->execute(
        array(
            "id_user" => $id_user,
            "pengiriman" => $pengiriman
        )
    );
}


function howManyData($id)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_cart WHERE id_user = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $query->fetchAll();
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

function insertToTransaksi($status, $kode_transaksi)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO tbl_transaksi (id_user, kode_transaksi ,nama_produk, jumlah_produk, harga, pengiriman, status_transaksi) 
    SELECT id_user, :kode_transaksi ,GROUP_CONCAT(nama_produk SEPARATOR ';'), qty_produk, SUM(total_harga), pengiriman, :status_pengiriman FROM tbl_cart GROUP BY id_user");
    $query->bindParam(":status_pengiriman", $status);
    $query->bindParam(":kode_transaksi", $kode_transaksi);
    return $query->execute();
}

function findAllTransaksi()
{
    global $conn;
    $query = $conn->prepare("SELECT *, tbl_data_user.nama_depan, tbl_data_user.nama_belakang from tbl_transaksi 
    JOIN tbl_data_user ON tbl_transaksi.id_user =tbl_data_user.id_user");
    $query->execute();
    return $query->fetchAll();
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
function findTransaksiById($id)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_transaksi where id_user = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetchAll();
}

function findTransaksiByKode($kode_transaksi)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_transaksi where kode_transaksi = :kode_transaksi");
    $query->bindParam(":kode_transaksi", $kode_transaksi);
    $query->execute();
    return $query->fetch();
}

function updateStatusTransaksi($kode_transaksi, $status_transaksi)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_transaksi SET status_transaksi = :status_transaksi WHERE kode_transaksi = :kode_transaksi");
    return $query->execute(
        array(
            "status_transaksi" => $status_transaksi,
            "kode_transaksi" => $kode_transaksi,
        )
    );
}
;

// function editSiswa($nama, $email, $password, $no_tlpn, $province, $city, $address, $postal_code, $gambar)
// {
//     global $conn;
//     $query = $conn->prepare("UPDATE regis SET  nama = :nama, email= :email, password= :password, no_tlpn= :no_tlpn, province= :province, city= :city, address= :address, postal_code= :postal_code, gambar= :gambar
//     WHERE email = :email");

//     return $query->execute(
//         array(

//             'nama' => $nama,
//             'email' => $email,
//             'password' => $password,
//             'no_tlpn' => $no_tlpn,
//             'province' => $province,
//             'city' => $city,
//             'address' => $address,
//             'postal_code' => $postal_code,
//             'gambar' => $gambar
//         )
//     );
// }
function editData($id, $nama_barang, $id_kategori, $id_merek, $fitur, $info_tambahan, $content, $harga_awal, $diskon, $jumlah_produk, $imgName)
{
    global $conn;
    $query = $conn->prepare("UPDATE tbl_produk SET nama_produk = :nama, id_kategori = :id_kategori, id_merk = :id_merek,
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
function cariStatus($id)
{
    global $conn;
    $query = $conn->prepare("SELECT status_transaksi FROM tbl_transaksi where id_user = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}
function cariSemuaData()
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM tbl_produk ORDER BY kode_produk DESC");
}