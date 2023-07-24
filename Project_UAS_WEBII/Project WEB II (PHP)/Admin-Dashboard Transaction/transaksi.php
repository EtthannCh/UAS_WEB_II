<?php include_once "../signup/config.php";
include_once "lib.php"; ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<?php include_once "../Landing Page/cdn.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <?php include_once "../Sidebar (PHP)/side-bar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left:250px; margin-right:0px; background-color:#fff">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Detail transaksi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product Detail</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode transaksi</th>
                                <th>ID User</th>
                                <th>Nama produk</th>
                                <th>JUMLAH PRODUK</th>
                                <th>Harga</th>
                                <th>Pengiriman</th>
                                <th>Status Transaksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data_produk = findAllTransaksi();
                            foreach ($data_produk as $data) {
                                $kode_transaksi = $data["kode_transaksi"];
                                $nama_produk = $data["nama_produk"];
                                $nama_produk1 = explode(";", $nama_produk);
                                $jlh_produk = count($nama_produk1);
                                echo "<tr>";
                                echo "<td>" . $data["kode_transaksi"] . "</td>";
                                echo "<td>" . $data["id_user"] . "</td>";
                                echo "<td>";
                                for ($i = 0; $i < $jlh_produk; $i++) {
                                    echo "<p>" . $nama_produk1[$i] . "</p>";
                                }
                                echo "</td>";
                                echo "<td>" . $data["jumlah_produk"] . "</td>";
                                echo "<td>" . $data["harga"] . "</td>";
                                echo "<td>" . $data["pengiriman"] . "</td>";
                                echo "<td>" . $data["status_transaksi"] . "</td>";
                                echo "<td><a href='form-edit-pengiriman.php?id=$kode_transaksi'>Edit</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                </div><!-- /.container-fluid -->
            </div>
        </div>
        <?php include_once "script.php"; ?>
        <script>
            new DataTable('#example', {
                pagingType: 'full_numbers'
            });
        </script>
</body>

</html>