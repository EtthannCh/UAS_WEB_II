<?php
include_once "../signup/config.php";
include_once "../lib.php";

echo $_POST["kode"];
echo insertToTransaksi("Menunggu Konfirmasi", $_POST["kode"], date("Y/m/d"));
deleteUserCart($_SESSION["id_user"]);

?>