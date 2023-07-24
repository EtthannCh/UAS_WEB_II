<?php
require_once 'lib-db-adminDash.php';
require_once '../signup/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.AES User Detail | Admin</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css">
    <style>
        th,
        td {
            font-size: 12px;
        }

        th {
            text-align: center !important;
        }

        .form-group {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php require '../Sidebar (PHP)/side-bar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <table class="table table-striped table-bordered data display" id="myTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No.Telp</th>
                        <th>Alamat</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = getDataFromDB();
                    foreach ($data as $userDetail) {
                        ?>
                        <tr>
                            <td>
                                <?php echo ucfirst($userDetail['nama_depan']) . " " . ucfirst($userDetail['nama_belakang']); ?>
                            </td>
                            <td>
                                <?php echo $userDetail['email']; ?>
                            </td>
                            <td style="text-align: center !important;">
                                <?php echo '0' . $userDetail['nomor_telepon']; ?>
                            </td>
                            <td>
                                <?php echo $userDetail['alamat']; ?>
                            </td>
                            <td style="text-align: center !important;">
                                <?php echo ucwords(strtolower(($userDetail['provinsi'])), ' '); ?>
                            </td>
                            <td style="text-align: center !important;">
                                <?php echo ucfirst($userDetail['kota']); ?>
                            </td>
                            <td style="text-align: center !important;">
                                <?php echo $userDetail['kode_pos']; ?>
                            </td>
                            <td style="text-align: center;">
                                <a href="" data-toggle="modal"
                                    data-target="#modal<?php echo $userDetail['id_customer']; ?>"><i
                                        class="ion-edit"></i></a>
                                <div class="modal fade" id="modal<?php echo $userDetail['id_customer']; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Detail Customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="edit_userDetail.php" method="post"
                                                    enctype="multipart/form-data">
                                                    <input type="hidden" name="id_customer" value=<?php echo $userDetail['id_customer'] ?>>
                                                    <div class="form-group">
                                                        <label>Nama depan</label>
                                                        <input type="text" class="form-control" name="nama_depan"
                                                            value="<?php echo $userDetail['nama_depan'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama belakang</label>
                                                        <input type="text" class="form-control" name="nama_belakang"
                                                            value="<?php echo $userDetail['nama_belakang'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor Telepon</label>
                                                        <input type="text" class="form-control" name="no_telp"
                                                            value="<?php echo '0' . $userDetail['nomor_telepon'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" class="form-control" name="alamat"
                                                            value="<?php echo $userDetail['alamat'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <input type="text" class="form-control" name="provinsi"
                                                            value="<?php echo $userDetail['provinsi'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kota</label>
                                                        <input type="text" class="form-control" name="kota"
                                                            value="<?php echo $userDetail['kota'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kode Pos</label>
                                                        <input type="text" class="form-control" name="kode_pos"
                                                            value="<?php echo $userDetail['kode_pos'] ?>">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>
</body>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script>
    new DataTable('#myTable', {
        pagingType: 'full_numbers'
    });
</script>

</html>