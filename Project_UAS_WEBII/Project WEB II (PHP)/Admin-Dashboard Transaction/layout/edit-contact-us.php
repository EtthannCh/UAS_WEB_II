<?php
include_once "../conn.php";
include_once "../lib.php";
include_once "head.php";
?>

<body>
    <form method="post" action="../edit_contact.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="no_telp" maxlength="12"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="lokasi">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fb">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="tw">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="ig">
        </div>
        <div class="mb-3">
            <label for="exampleInputLocation1" class="form-label">Gmail</label>
            <input type="text" class="form-control" id="exampleInputLocation1" name="gmail">
        </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>

    <script>
        $(".submit").on("click", function () {
            document.cookie = "action = edit_contact";
        })
    </script>
</body>