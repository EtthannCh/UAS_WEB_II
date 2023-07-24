<?php include_once "../conn.php";
include_once "../lib.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once "../Landing Page/head.php"; 
include_once "../Landing Page/cdn.php";?>
<style>
  body {
    background-color: #fff;
  }

  /* table {
      border-collapse: collapse;
      width: 100%;
    } */

  th,
  td {
    text-align: center;
    padding: 8px;
    border: 0.5px solid #d3d3d3;
  }

  .button-row {
    display: flex;
    justify-content: right;
    padding-bottom: 40px;
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

  .modal-footer button a {
    text-decoration: none;
    color: #fff;
  }

  td button a {
    text-decoration: none;
    color: #fff;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <?php include_once "sidebar.php"; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left:250px; margin-right:0px; background-color:#fff">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Detail</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Product Detail</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="button-row">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
              Add
            </button>
          </div>
          <!-- Modal HTML Markup -->
          <div id="ModalLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title">Login</h1>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST" action="save_data.php" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                      <label class="control-label">Kode Barang</label>
                      <div>
                        <input type="text" class="form-control input-lg" name="kode_barang" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Nama</label>
                      <div>
                        <input type="text" class="form-control input-lg" name="nama_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Tipe</label>
                      <div>
                        <input type="text" class="form-control input-lg" name="tipe_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Merek</label>
                      <div>
                        <input type="text" class="form-control input-lg" name="merek_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Ukuran</label>
                      <div>
                        <input type="text" class="form-control input-lg" name="ukuran_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Harga</label>
                      <div>
                        <input type="number" class="form-control input-lg" name="harga_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Diskon</label>
                      <div>
                        <input type="number" class="form-control input-lg" name="diskon_barang">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Deskripsi</label>
                      <div>
                        <textarea name="info_tambahan" rows="5" cols="60"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <form method="POST" enctype="multipart/form-data" action="upload.php">
                        <input type="file" name="foo" value="file" />
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary"></input>
                        </div>
                      </form>
                    </div>

                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
          <table id="example" class="display" style="width:100%">
            <thead>
              <tr>
                <th>ID barang</th>
                <th>Nama produk</th>
                <th>ID KATEGORI</th>
                <th>ID MERK</th>
                <th>FITUR</th>
                <th>INFO</th>
                <th>Deskripsi</th>
                <th>HARGA AWAL</th>
                <th>Diskon</th>
                <th>JUMLAH PRODUK</th>
                <th>GAMBAR</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $data_produk = cariSemuaData();
              foreach ($data_produk as $data) {
                // $imgSrc = $data["gambar"];
                $imgSrc = $data["gambar"];
                $id = $data["kode_produk"];
                echo "<tr>";
                echo "<td>" . $data["kode_produk"] . "</td>";
                echo "<td>" . $data["nama_produk"] . "</td>";
                echo "<td>" . $data["id_kategori"] . "</td>";
                echo "<td>" . $data["id_merk"] . "</td>";
                echo "<td>" . $data["fitur"] . "</td>";
                echo "<td>" . $data["info_tambahan"] . "</td>";
                echo "<td>" . $data["deskripsi"] . "</td>";
                echo "<td>" . $data["harga_awal"] . "</td>";
                echo "<td>" . $data["diskon"] . "</td>";
                echo "<td>" . $data["jumlah_produk"] . "</td>";
                echo "<td> <img src='gambar/$imgSrc' width='100px' height='100px'></td>";
                echo "<td><button class='btn btn-danger btn-md'><a href='form-edit.php?id=" . $id . "'>EDIT</a></button></td>";
                echo "<td><button class='btn btn-danger btn-md'><a href='hapus-data.php?id=" . $id . "'>DELETE</a></button></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
        </div><!-- /.container-fluid -->
      </div>


    </div>
    <?php include_once "../script.php"; ?>
    <script>
    let aksi = "";
    $(document).on("click", ".delete_button", function () {
        let id_barang = $(this).val();
        // alert(id_barang);
        aksi = "hapus";
        document.cookie = "id_barang=" + id_barang;
        document.cookie = "action=" + aksi;
        $.post("save_data.php", {}, function () {
            location.reload();
        });
    })
    $(document).on("click", ".cbxBarang", function () {
        let id_barang = $(this).val();
        aksi = "edit"
        alert(id_barang);
        $(".save").on("click", function () {
            document.cookie = "action=" + aksi;
            document.cookie = "id_barang=" + id_barang;
        })
    })
    new DataTable('#example', {
        pagingType: 'full_numbers'
    });
</script>
</body>

</html>