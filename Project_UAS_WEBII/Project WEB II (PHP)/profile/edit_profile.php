<?php
require_once "../signup/config.php";
require_once "../signup/lib_db_regis.php";

$email = $_SESSION['email'];

$regis = findAllKontak1($email);
$img = $regis['gambar'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <style>
        nav .container{
            padding-left: 70px;
        }

        .container2 {
            text-align: center; 
        }
        
        .cont {
            position: relative; 
            width: 200px;
            height: 200px;
            background-color: #fff; 
            margin: 0 auto; 
            border: 2px solid #ccc;
            border-radius: 50%;
        }
        
        .cont img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 50%; 
        }

    </style>
</head>
<body>
    <!--Navigation Bar-->
    <nav>
        <?php include_once '../Landing Page/navigation.php' ?>
    </nav>
    <br>
    <br><br><br><br>
    <form method="post" enctype="multipart/form-data" action="edit-data.php" class="container2">
    <div class="cont">
	<?php 	echo "<td> <img src='gambar/$img'width='100px' height='100px'></td>";?>
    </div>

        <!-- Edit Button -->
        <input type="submit" name="submit" value="Submit" class="signup"
        style="border-style: solid;border-color: rgb(0, 0, 0);color: rgb(255, 255, 255);background-color: rgb(0, 0, 0);text-align: center;padding: 5px;border-radius: 30px;margin-left: 70%;padding-left: 40px;padding-right: 40px;">

<br><br>
        <table>
            <tbody>
                <tr>
                    <td>Nama depan</td>
                    <td><input type="text" name="nama_depan" value="<?php echo $regis['nama_depan']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Nama belakang</td>
                    <td><input type="text" name="nama_belakang" value="<?php echo $regis['nama_belakang']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input disabled="disabled" type="text" name="email" value="<?php echo $regis['email']; ?>" style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $regis['password']; ?>" style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><input type="text" name="nomor_telepon" value="<?php echo $regis['nomor_telepon']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><input type="text" name="provinsi" value="<?php echo $regis['provinsi']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="kota" value="<?php echo $regis['kota']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="alamat" value="<?php echo $regis['alamat']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Postal code</td>
                    <td><input type="text" name="kode_pos" value="<?php echo $regis['kode_pos']; ?>"style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>
                    <form method="POST" enctype="multipart/form-data" action="2.php">
                        <input type="file" name="foo" value="file" />
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php //include_once 'tabel.php' ?>
    </form>
    <script src="profile.js"></script>
</body>
</html>
