<?php 
require_once '../signup/config.php';
require_once 'lib-db-adminDash.php';

$data = getDetailUser();
    foreach ($data as $userDetail) {
?>

<div class="modal fade" id="userViewModal<?php echo $userDetail['id_customer'];?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Profile <i class="fas fa-user"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">  
                <form action="../Admin-Dashboard User Detail (PHP)/Adm-UserMenu2.php" method="post" enctype = "multipart/form-data">
                <input type="hidden" name = "id_customer" value=<?php echo $userDetail['id_customer']?>>
                <div class="profile-pic" style="margin-left: 40%; margin-top: 5px; border: 1px solid black !important; border-radius: 50%; width: 100px; height: 100px; overflow: hidden;">
                    <img style="width: 100%;  height: auto;"src = "img/<?php echo $userDetail['gambar'];?>">
                </div>  
                <div class="form-group" style="text-align: center !important;">
                    <label><?php echo ucfirst($userDetail['nama_depan']) . " " . ucwords(strtolower($userDetail['nama_belakang']), ' ')?></label><br>
                    <label><?php echo '0' . $userDetail['nomor_telepon']?></label><br>
                    <label><?php echo ucfirst($userDetail['alamat']) . ' ,' . $userDetail['kota'] . ' ,' . ucwords(strtolower($userDetail['provinsi']), ' ');?></label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Detail</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php }?>