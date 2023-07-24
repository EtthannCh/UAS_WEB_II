<?php 
require_once '../signup/config.php';
require_once 'lib-db-adminDash.php';

$data = getDataFromDB();
foreach ($data as $userAccount) {
?>

<div class="modal fade" id="editModal<?php echo $userAccount['id_user'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">  
            <form action="edit_userAcc.php" method="post" enctype = "multipart/form-data">
                <input type="hidden" name = "id_user" value=<?php echo $userAccount['id_user']?>>
                <div class="form-group">
                    <label style="text-align: left;">Nama depan</label>
                    <input type="text" class="form-control" name = "nama_depan" value="<?php echo $userAccount['nama_depan']?>">
                </div>
                <div class="form-group">
                    <label style="text-align: left;">Nama belakang</label>
                    <input type="text" class="form-control" name = "nama_belakang" value="<?php echo $userAccount['nama_belakang']?>">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <?php $status = $userAccount['status_acc'];?>
                    <select name = "status_user">
                        <option value = <?php echo $status?>><?php echo $status?></option>
                        <?php 
                            if($status == 'aktif'){
                        ?>
                        <option value = "tidak aktif">tidak aktif</option>
                        <?php }else{?>
                        <option value = 'aktif'>aktif</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php }?>