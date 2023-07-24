<?php
include_once "../signup/config.php";
include_once "../lib.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "../Landing Page/cdn.php" ?>
</head>
<style>
    <?php include_once "styles.css" ?>
</style>

<body>
    <div class="wrapper">
        <div class="info">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary pilihan" for="btnradio1">Semua</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary pilihan" for="btnradio2">Menunggu Konfirmasi</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary pilihan" for="btnradio3">Diproses</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-primary pilihan" for="btnradio4">Dikirim</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn btn-outline-primary pilihan" for="btnradio5">Selesai</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn btn-outline-primary pilihan" for="btnradio6">Pembatalan</label>
            </div>
        </div>
        <div class="listProduk">
            <div class="produk">
                <div class="bodyProduk">
                    <?php
                    if (isset($_SESSION["status"])) {
                        if ($_SESSION["status"] == "Semua") {
                            $data_user = findTransaksiById(1);
                            foreach ($data_user as $data) {
                                echo "<div class='containerProduk'>";
                                echo "<div class='productWrapper'>";
                                echo "<div class='ketProduk'>";
                                echo "<img src='64868ed6e8fc9.png' alt='gambar' width='100px' height='100px'>";
                                echo "<div class='keteranganProduk'>";
                                echo "<p>" . $data['nama_produk'] . "</p>";
                                echo "<p> x" . $data['jumlah_produk'] . "</p>";
                                echo " <div class='statusPengiriman'><i class='fa-solid fa-truck'></i>";
                                echo "<p>" . $data["status_transaksi"] . "</p>";
                                echo "</div>
                                        <div class='status'>
                                        <a href='#'>Tekan disini untuk melihat status pengiriman</a>
                                        <i class='fas fa-chevron-right'></i>
                                        </div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div><p>" . convertToRupiah($data['harga']) . "</p></div>";
                                echo "</div>";
                            }
                        } else {
                            $data_transaksi = filterTransaksiByUser($_SESSION['status'], $_SESSION['id_user']);
                            foreach ($data_transaksi as $data) {
                                echo "<div class='containerProduk'>";
                                echo "<div class='productWrapper'>";
                                echo "<div class='ketProduk'>";
                                echo "<img src='64868ed6e8fc9.png' alt='gambar' width='100px' height='100px'>";
                                echo "<div class='keteranganProduk'>";
                                echo "<p>" . $data['nama_produk'] . "</p>";
                                echo "<p> x" . $data['jumlah_produk'] . "</p>";
                                echo " <div class='statusPengiriman'><i class='fa-solid fa-truck'></i>";
                                echo "<p>" . $data["status_transaksi"] . "</p>";
                                echo "</div>
                                        <div class='status'>
                                        <a href='#'>Tekan disini untuk melihat status pengiriman</a>
                                        <i class='fas fa-chevron-right'></i>
                                        </div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div><p>" . convertToRupiah($data['harga']) . "</p></div>";
                                echo "</div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".pilihan").on("click", function () {
                let text = $(this).text();
                // document.cookie = "status = " + text;
                $.post("save_data.php", { status: text }, function (data) {
                    alert(data);
                });
            })
        })
    </script>
</body>

</html>