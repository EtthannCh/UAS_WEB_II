<?php
require_once "../signup/config.php";
require_once "lib_db_brand.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.php"; ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 0.00001px solid gray;
        }

        tr:nth-child(even) {
            background-color: #F0F0F0;
        }

        .button-row {
            display: flex;
            justify-content: right;
            padding-bottom: 40px;
        }

        .add-button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        .delete-button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            z-index: 2;
        }

        .form-field {
            margin-bottom: 10px;
        }

        .form-field label {
            display: inline-block;
            width: 100px;
        }

        .form-field input[type="text"] {
            width: 200px;
        }

        .form-field input[type="file"] {
            width: auto;
        }

        .form-field textarea {
            width: 200px;
            height: 80px;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .editor-container {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            padding-bottom: 200px;
        }

        .desk {
            font-size: 18px;
            padding-top: 50px;
        }

        .save {
            padding: 10px 10px;
            width: 100px;
            right: 10%;
            margin-left: 1050px;
            border: none;
            border-radius: 10px;
            background-color: black;
            color: white;
        }
        .edit{
            border-style: solid;
            border-color: rgb(255, 255, 255);
            color: rgb(255, 255, 255);
            background-color: rgb(0, 0, 0);
            text-align: center;
            padding: 5px;
            border-radius: 30px;
            padding-left: 40px;
            padding-right: 40px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php $regis = findAllKontak();?>
    
    <div class="wrapper">
        <?php require_once '../Sidebar (PHP)/side-bar.php';?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Brand</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Brand Partner</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                        <table>
                            <thead>
                                <tr>
                                    <th>Kode merk</th>
                                    <th>Nama merk</th>
                                    <th>gambar</th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach($regis as $row) {
                                echo "<tr>";
                                echo "<td>".$row['kode_merk']."</td>";
                                echo "<td>".$row['nama_merk']."</td>";
                                echo "<td>".$row['gambar']."</td>";
                                echo "<td style='text-align: center;'><a href='hapus-data.php?kode_merk=". $row['kode_merk'] ."' onclick='return confirm(\"Are you sure you want to delete?\")'><i class='fas fa-trash'></a></td>";


                                //echo "<td><a href='form-edit.php?id=". $row['id'] ."'>Edit</a> 

                                echo "</tr>";
                                //$no++;
                            }?>
                            

                            </thead>
                        </table>
                    <br><br>
                        <a href="brand-tambah.php" class="edit">Tambah</a>
                </div><!-- /.container-fluid -->
            </div>


        </div>

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>

</body>

</html>
