<?php 
include_once "../conn.php";
include_once "../lib.php";

echo $jenis_pengiriman = $_COOKIE["jenis_pengiriman"];
$total_hargaSemua = $_COOKIE["total_harga"];
$harga_pengiriman = findShipping($jenis_pengiriman);
$_SESSION["harga_pengiriman"] = $harga_pengiriman;
$_SESSION["total_semua"] = $total_hargaSemua + $harga_pengiriman;
// $nama_produk = $_COOKIE["selectedName"];
if($_COOKIE["action"] == "hapus"){
    hapusBarangCart($_COOKIE["id_produk"]);
    setFlashMessage("delete", "Delete Product");
    $deletedProduct = getFlashMessage("delete");
    $_SESSION["flashMessage"] = $deletedProduct;
}
if($_COOKIE["action"] == "update"){
    updateQtyCart($_COOKIE["qty_produk"], $_COOKIE["id_produk"], $_COOKIE["jenis_pengiriman"]);
    setFlashMessage("update", "Update Produk");
    $updatedProduct = getFlashMessage("update");
    $_SESSION["flashMessage"] = $updatedProduct;
    echo $_SESSION["flashMessage"];
}
if($_COOKIE["action"] == "update_pengiriman"){
    updatePengiriman($_COOKIE["id_user"] ,$_COOKIE["jenis_pengiriman"]);
}
?>