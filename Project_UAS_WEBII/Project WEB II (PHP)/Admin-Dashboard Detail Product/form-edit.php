<?php include_once "../signup/config.php";
include_once "../lib.php"; ?>
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
        $id = $_GET["id"];
        $data_barang = findBarangById($id);
        ?>
        <h1>Edit data</h1>
        <form method="post" action="edit-data.php" enctype="multipart/form-data" class="edit_form">
            <input type="hidden" value="<?php echo $id ?>" name="id_barang">
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_produk"
                    value="<?php echo $data_barang["nama_produk"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">ID KATEGORI</label>
                <input type="text" class="form-control" name="id_kategori"
                    value="<?php echo $data_barang["id_kategori"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">ID MERK</label>
                <select name='merek' class='form-control' value=<?php echo $data_barang['kode_merk'] ?>>
                    <?php $data_merek = findAllMerek();
                    foreach ($data_merek as $merek) {
                        $nama_merek = $merek["kode_merk"];
                        echo "<option value='$nama_merek'>" . $nama_merek . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">FITUR</label>
                <div class="editor-container">
                    <textarea id="editor2" name="fitur" class="editor">
                        <?php echo $data_barang["fitur"] ?>
                                                    </textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">INFO</label>
                <div class="editor-container">
                    <textarea id="editor1" name="info_tambahan" class="editor">
                        <?php echo $data_barang["info_tambahan"] ?>
                                    </textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <div class="editor-container">
                    <textarea id="editor" name="content" class="editor">
                        <?php echo $data_barang["deskripsi"] ?>
                    </textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">HARGA AWAL</label>
                <input type="number" class="form-control" name="harga_awal"
                    value="<?php echo $data_barang["harga_awal"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Diskon</label>
                <input type="number" class="form-control" name="diskon" value="<?php echo $data_barang["diskon"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">JUMLAH PRODUK</label>
                <input type="number" class="form-control" name="jumlah_produk"
                    value="<?php echo $data_barang["jumlah_produk"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <form method="POST" enctype="multipart/form-data" action="upload.php">
                    <input type="file" name="foo" value="file" />
                </form>
                <input type="submit" class="btn btn-primary" value="upload"></input>
            </div>
        </form>
    </div>
</body>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log('CKEditor initialized');
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error);
        });
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(editor => {
            console.log('CKEditor initialized');
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .then(editor => {
            console.log('CKEditor initialized');
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error);
        });
</script>