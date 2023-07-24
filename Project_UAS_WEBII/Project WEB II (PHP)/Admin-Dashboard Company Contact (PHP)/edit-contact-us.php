<?php
include_once "../signup/config.php";
include_once "../lib.php"; ?>

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

<style>

</style>
<body>
<?php require_once '../Sidebar (PHP)/side-bar.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Contact Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <?php $kontak = findTabelKontak() ?>
    <form method="post" action="edit-contact.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                value="<?php echo $kontak["gmail"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="no_telp" maxlength="12"
                value="<?php echo $kontak["no_telp"] ?>"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="lokasi"
                value="<?php echo $kontak["Lokasi"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fb"
                value="<?php echo $kontak["facebook"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="tw"
                value="<?php echo $kontak["twitter"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="ig"
                value="<?php echo $kontak["instagram"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Gmail</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="gmail"
                value="<?php echo $kontak["gmail"] ?>">
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>

    <script>
        $(".submit").on("click", function () {
            document.cookie = "action = edit-contact";
        })
    </script>
    </div>
</body>
