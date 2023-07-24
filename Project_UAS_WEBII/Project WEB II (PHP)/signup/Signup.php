<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'head.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style></style>
</head>

<body>
    <?php include_once '../Login/nav.php' ?>
    <form method="post" enctype="multipart/form-data" action="tambah-data.php" class="box" style="height: 1100px">
        <div class="form" actio>
            <div class="inputBox">
                <input type="text" name="nama_depan" class="required">
                <span>Nama depan</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="nama_belakang">
                <span>Nama belakang</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="email" class="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password-input" class="required" minlength="8">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="confirm" id="password-input" class="required">
                <span>Password re-confirmation</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="nomor_telepon" class="required" minlength="11">
                <span>Phone number</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="provinsi" class="required">
                <span>Province</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="kota" class="required">
                <span>City</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="alamat" class="required">
                <span>Address</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="kode_pos" class="required" minlength="5">
                <span>Postal Code</span>
                <i></i>
            </div>
            <input type="hidden" name="level" value="user">
            <div class="tnc">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" class="required">
                    <label class="form-check-label text-white"
                        style="font-size: 14px; opacity: 80%; justify-content: left;" for="flexCheckDefault">
                        Terms and Condition
                    </label>
                </div>
            </div>
            <br>
            <input type="submit" name="submit" value="Submit"
                class="signup" style="border-style: solid; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); text-align: center; padding: 5px; border-radius: 30px; margin-left: 60%; padding-left: 40px; padding-right: 40px;">
    </form>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            $('form').validate({
                rules: {
                    nama_depan: 'required',
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    confirm: {
                        required: true,
                        equalTo: '#password-input'
                    },
                    nomor_telepon: {
                        required: true,
                        minlength: 11
                    },
                    provinsi: 'required',
                    kota: 'required',
                    alamat: 'required',
                    kode_pos: {
                        required: true,
                        minlength: 5
                    },
                    flexCheckDefault: 'required'
                },
                messages: {
                    nama_depan: 'Please enter your first name',
                    nama_belakag: 'Please enter your last name',
                    email: {
                        required: 'Please enter your email',
                        email: 'Please enter a valid email'
                    },
                    password: {
                        required: 'Please enter a password',
                        minlength: 'Password must be at least 8 characters long'
                    },
                    confirm: {
                        required: 'Please enter the password again',
                        equalTo: 'Passwords do not match'
                    },
                    nomor_telepon: {
                        required: 'Please enter your phone number',
                        minlength: 'Phone number must be at least 11 digits long'
                    },
                    provinsi: 'Please enter your province',
                    kota: 'Please enter your city',
                    alamat: 'Please enter your address',
                    kode_pos: {
                        required: 'Please enter your postal code',
                        minlength: 'Postal code must be at least 5 characters long'
                    },
                    flexCheckDefault: 'Please accept the terms and conditions'
                }
            });
        });
    </script>

</body>

</html>
