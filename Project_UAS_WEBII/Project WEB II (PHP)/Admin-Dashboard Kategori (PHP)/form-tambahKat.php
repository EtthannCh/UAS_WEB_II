<?php 
require_once '../signup/config.php';
require_once 'lib-db-adminCat.php';

?>

<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">  
            <form action="tambahKat.php" method="post" enctype = "multipart/form-data">
                <div class="form-group">
                    <label style="text-align: left;">Nama Kategori</label>
                    <input type="text" class="form-control" name = "nama_kategori">
                </div>
                <div class="form-group">
                    <label style="text-align: left;">gambar_kategori</label> <br>
                    <form action="upload.php" method="post" enctype = "multipart/form-data">
                        <input type="file" name="foo" value=""><br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</input>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>
</div>