<?php
include_once "../../../Project WEB II (PHP)/signup/config.php";
include_once "../lib.php";
if(!isset($_SESSION["status"])){
    $_SESSION["status"] = "Semua";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/"> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
</head>
<style>
    <?php include_once "styles.css" ?>
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php  include_once "../../Sidebar (PHP)/side-bar.php"; ?>

        <div class="wrapper-2">
            <ul class="list-group list-group-horizontal">
                  <a href="#" class="list-group-item-sm list-group-item-action list-group-item-primary">Semua</a>
                  <a href="#" class="list-group-item-sm list-group-item-action list-group-item-primary">Menunggu Konfirmasi</a>
                  <a href="#" class="list-group-item-sm list-group-item-action list-group-item-primary">Diproses</a>
                  <a href="#" class="list-group-item-sm list-group-item-action list-group-item-primary">Sedang Dikirim</a>
                  <a href="#" class="list-group-item-sm list-group-item-action list-group-item-primary">Selesai</a>
            </ul>   
            <header class="p-3 mb-3 border-bottom">
                <div class="container d-flex">
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start feature_div">
                        <a href="/"
                            class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>

                        <ul
                            class="nav col-12 col-lg-auto me-lg-auto mb-2 d-flex justify-content-center mb-md-0 feature">
                            <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                            <li><a href="#" class="nav-link px-2 link-secondary">Customers</a></li>
                            <li><a href="#" class="nav-link px-2 link-secondary">Exports</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="container">
                <table class="table table-striped table-bordered data display" id="myTable">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Nama Produk</th>
                            <th>Kode Transaksi</th>
                            <th>Jumlah Produk</th>
                            <th>Harga Produk</th>
                            <th>Pengiriman</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION["status"])) {
                            if ($_SESSION["status"] == "Semua") {
                                $data = findAllTransaksi();
                                foreach ($data as $datas) {
                                    $id = $datas["id_user"];
                                    echo "<tr>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>". $datas["kode_transaksi"]."</td>";
                                    echo "<td>" . $datas["nama_produk"] . "</td>";
                                    echo "<td>" . $datas["jumlah_produk"] . "</td>";
                                    echo "<td>" . $datas["harga"] . "</td>";
                                    echo "<td>" . $datas["pengiriman"] . "</td>";
                                    echo "<td>" . $datas["status_transaksi"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                $datas = filterTransaksi($_SESSION["status"]);
                                foreach ($datas as $data) {
                                    $id = $data["id_user"];
                                    echo "<tr>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>" . $data["nama_produk"] . "</td>";
                                    echo "<td>" . $data["kode_transaksi"] . "</td>";
                                    echo "<td>" . $data["jumlah_produk"] . "</td>";
                                    echo "<td>" . $data["harga"] . "</td>";
                                    echo "<td>" . $data["pengiriman"] . "</td>";
                                    echo "<td>" . $data["status_transaksi"] . "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myTable").DataTable({
                pagingType: "full_numbers",
            });
        });
        $(".list-group-item-sm").on("click", function(){
            var item = $(this).text();
            $.post("save_data.php", {status:item}, function(data){
                location.reload();
            })
        })
    </script>
</body>