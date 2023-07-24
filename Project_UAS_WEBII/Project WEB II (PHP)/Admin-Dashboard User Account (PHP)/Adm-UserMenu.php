<?php 
    require_once 'lib-db-adminDash.php';
    require_once '../signup/config.php';
    include_once 'userDetail.php';
    include_once 'form_editUserAcc.php';
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
            <h1 class="m-0">Users Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Account</li>
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
                            <th>Level</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = getDataFromDB();
                            foreach ($data as $userAccount) {
                        ?>
                        <tr>
                            <td><?php echo ucfirst($userAccount['nama_depan']). " " . ucfirst($userAccount['nama_belakang']);?></td>
                            <td><?php echo $userAccount['email'];?></td>
                            <td style = "text-align: center !important;"><?php echo $userAccount['level'];?></td>
                            <?php $status = $userAccount['status_acc'];?>
                            <td style = "text-align: center !important;">
                                <select disabled="disabled";>
                                    <option value = <?php echo $status?>><?php echo $status?></option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <a href="#" data-toggle="modal" class="mr-2" data-target="#userViewModal<?php echo $userAccount['id_customer'];?>"><i class="fas fa-eye"></i></a>
                                <a href="#" data-toggle="modal" data-target="#editModal<?php echo $userAccount['id_user'];?>"><i class="ion-edit"></i></a>
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