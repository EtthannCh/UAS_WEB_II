<?php 
    require_once 'lib-db-adminDash.php';
    require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PT.AES Admin Dashboard</title>
</head>
<body>
    <?php require '../Sidebar (PHP)/side-bar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row" style="margin-left: 10px; margin-right: 10px;">
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-success">
              <?php 
                $data = countAdmin(); 
                $countData = count($data);
              ?>
              <div class="inner" style="text-align: right;">
                <h3 style="margin-right: 48px;"><?php echo $countData?></h3>
                <p style="margin-right: 30px;">Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-person" style="margin-right: 130px;"></i>
              </div>
              <a href="../Admin-Dashboard User Account (PHP)/Adm-UserMenu.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <?php 
                $dataSale = countSale(); 
                $countDataSale = count($dataSale);
              ?>
              <div class="inner" style="text-align: right;">
                <h3 style="margin-right: 48px;"><?php echo $countDataSale;?></h3>
                <p style="margin-right: 30px;">Today Sale</p>
              </div>
              <div class="icon">
                <i class="fa fa-line-chart" style="margin-right: 120px; font-size: 65px;"></i>
              </div>
              <a href="transaction.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <?php 
                $dataUser = countUser(); 
                $countDataUser = count($dataUser);
              ?>
              <div class="inner" style="text-align: right; color: white;">
                <h3 style="margin-right: 18%;"><?php echo $countDataUser;?></h3>
                <p style="margin-right: 30px;">Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker" style="margin-right: 130px;"></i>
              </div>
              <a href="../Admin-Dashboard User Account (PHP)/Adm-UserMenu.php" class="small-box-footer" style="font-weight: 500!important; color: white!important;">More info <i class="fas fa-arrow-circle-right" style="color: white;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <?php 
                $dataMerk = countBrand(); 
                $countDataBrand = count($dataMerk);
              ?>
              <div class="inner" style="text-align: right;">
                <h3 style="margin-right: 23%;"><?php echo $countDataBrand;?></h3>
                <p style="margin-right: 30px;">Partners</p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake" style="margin-right: 110px; font-size: 65px;"></i>
              </div>
              <a href="../Brand/brand.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

    <div class="row" style="margin-left: 10px;">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1 ml-1"></i>
                        Sales
                    </h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#visitor-chart" data-toggle="tab">Line</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="chart tab-pane active" id="visitor-chart"style="position: relative; height: 300px;">
                            <canvas id="visitor-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-5 connectedSortable">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">
                    <b>New Order!</b>
                </h3>
                <br>
                <hr>
                <p style="font-size: 14px;"><i class="fa fa-exclamation" style="color: red;"></i> Username123 melakukan pemesanan terhadap 1 unit AC.</p>
                <a href="../Admin-Dashboard Transaction/transaksi.php" class="small-box-footer"><i class="fas fa-arrow-circle-right" style="color:green;"></i></a>
                </div>
            </div>
        </section>
    </div>
    
  </div>
</body>
</html>