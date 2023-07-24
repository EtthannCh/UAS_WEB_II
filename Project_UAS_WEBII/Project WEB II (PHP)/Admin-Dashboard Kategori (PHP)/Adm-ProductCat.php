<?php 
    require_once 'lib-db-adminCat.php';
    require_once '../signup/config.php';
    require_once 'form-tambahKat.php';
    require_once 'Edit-Kategori.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PT.AES User Account | Admin</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css">
    <style>
        th, td{
            font-size: 12px;
        }

        th{
            text-align: center !important;
        }

        .form-group{
            text-align: left !important;
        }
    </style>
    
</head>

<body>
    <?php require '../Sidebar (PHP)/side-bar.php'?>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
            <div class="container">
                <a href = "#" data-toggle = "modal" data-target = "#tambahmodal" style="padding-left: 20px; padding-right: 20px; border-radius: 4px; background-color: green; border: green; color: white;font-size: 18px; margin-left: 90%; padding-bottom: 5px; padding-top: 5px;">Add <i class="fas fa-add"></i></a><br><br>
                <table class="table table-striped table-bordered data display" id="myTable">
                    <thead>
                        <tr>
                            <th style="width: 70px !important;">ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Gambar Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = getCategory();
                            foreach ($data as $Category) {
                        ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $Category['id_kategori'];?></td>
                            <td><?php echo ucfirst($Category['nama_kategori']);?></td>
                            <td><?php echo $Category['gambar_kategori'];?></td>
                            <td style="text-align: center;">
                                <a href = "#" data-toggle = "modal" data-target = "#editModal<?php echo $Category['id_kategori']?>"><i class="ion-edit"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
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