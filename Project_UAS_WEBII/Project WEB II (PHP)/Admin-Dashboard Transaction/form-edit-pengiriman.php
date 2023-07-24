<?php include_once "../signup/config.php";
include_once "lib.php"; ?>

<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    .form-edit {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 50px;
    }

    .form-edit .edit_form {
        margin-top: 20px;
        border: 2px solid #0d6efd;
        padding: 50px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="form-edit">
        <?php
        echo $id = $_GET["id"];
        $data_barang = findTransaksiByKode($id);
        ?>
        <h1>Edit data</h1>
        <form method="post" action="edit-pengiriman.php" enctype="multipart/form-data" class="edit_form">
            <input type="hidden" value="<?php echo $id ?>" name="id_barang">
            <div class="mb-3">
                <label class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control kode_transaksi" name="kode_transaksi"
                    value="<?php echo $data_barang["kode_transaksi"] ?>" disabled>
                <input type="hidden" name="hidden_kode" value="<?php echo $data_barang["kode_transaksi"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">ID User</label>
                <input type="text" class="form-control id_user" name="id_user"
                    value="<?php echo $data_barang["id_user"] ?>" disabled>
                <input type="hidden" name="hidden_id" value="<?php echo $data_barang["id_user"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" value="<?php echo $data_barang["status_transaksi"] ?>"
                    name="status_transaksi">
                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Sedang Dikirim">Sedang Dikirim</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="UPDATE"></input>
        </form>
    </div>

    <script>
        document.querySelector(".form").addEventListener("submit", function (event) {
            document.querySelector(".kode_transaksi").disable = false;
            document.querySelector(".hidden_kode").value = document.querySelector(".kode_transaksi").value;
            document.querySelector(".kode_transaksi").disable = true;

            document.querySelector(".id_user").disable = false;
            document.querySelector(".hidden_id").value = document.querySelector(".kode_transaksi").value;
            document.querySelector(".id_user").disable = true;
            alert(document.querySelector(".hidden_kode").value);
        })
    </script>
</body>