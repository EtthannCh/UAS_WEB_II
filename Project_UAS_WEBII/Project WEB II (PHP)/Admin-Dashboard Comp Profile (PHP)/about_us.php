<?php
require_once "config.php";
require_once "lib_db_admin.php";
$id = 1;

$About = findAbout($id);
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

<head>
    <?php require_once "../Sidebar (PHP)/side-bar.php"; ?>
    
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: center;
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
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Company Profile</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Company Profile</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form method="post" enctype="multipart/form-data" action="edit-data.php">
                        <br>
                        <label>Intro</label>
                        <br><input type="text" style="width: 99.5%;" name="intro" value="<?php echo $About['intro'];?>">
                        <br><br><label>Waktu Buka</label>
                        <br><input type="text" style="width: 99.5%;" name="waktu_buka" value="<?php echo $About['waktu_buka'];?>">
                        <br><br>
                        <table>
                            <thead>
                                <tr>
                                    <th>Gambar profile</th>
                                    <th>Gambar 1</th>
                                    <th>Gambar 2</th>
                                    <th>Gambar 3</th>
                                </tr>
                                <tr>
                                    <td><img style="width: 150px;" src="Img/<?php echo $About['gambar_profile'];?>"><br><br><input type="file" name="gambar_profile" value="file" /></td>
                                    <td><img style="width: 150px;" src="Img/<?php echo $About['gambar_1'];?>"><br><br><input type="file" name="gambar_1" value="file" /></td>
                                    <td><img style="width: 150px;" src="Img/<?php echo $About['gambar_2'];?>"><br><br><input type="file" name="gambar_2" value="file" /></td>
                                    <td><img style="width: 150px;" src="Img/<?php echo $About['gambar_3'];?>"><br><br><input type="file" name="gambar_3" value="file" /></td>
                                </tr>
                            </thead>
                        </table>
                        <p class="desk"><strong>Isi</strong></p>
                        <div class="editor-container">
                            <textarea id="editor" name="isi"><?php echo $About['isi'] ?></textarea>
                        </div>
                        <input type="submit" style="background-color: green; color:white; border-color: green;" name="submit" value="Submit" class="signup">
                    </form>
                </div><!-- /.container-fluid -->
            </div>


        </div>

    </div>
</body>
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
<!-- Your existing scripts -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('CKEditor initialized');
            })
            .catch(error => {
                console.error('Error initializing CKEditor:', error);
            });
    });
</script>

</html>
