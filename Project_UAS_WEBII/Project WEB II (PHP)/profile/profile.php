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
        <?php include_once "../Landing Page/navigation.php" ?>
    </nav>
    <br>
    <br><br><br><br>
    <div class="container2">
    <div class="cont">
	<?php 	echo "<td> <img src='gambar/$img'width='100px' height='100px'></td>";?>
    </div>
        <h1><?php echo $regis['nama_depan'] ." ".$regis['nama_belakang']; ?></h1>

        <!-- Edit Button -->
        <a href="edit_profile.php" class="signup" 
        style="border-style: solid;border-color: rgb(0, 0, 0);color: rgb(255, 255, 255);background-color: rgb(0, 0, 0);text-align: center;padding: 5px;border-radius: 30px;margin-left: 70%;padding-left: 40px;padding-right: 40px;">
        Edit Profile</a>
<br><br>
        <table>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><?php echo $regis['nama_depan'] ." ". $regis['nama_belakang']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $regis['email']; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input disabled="disabled" type="password" name="password" value="<?php echo $regis['password']; ?>" style="border: none; background-color: white;"></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><?php echo $regis['nomor_telepon']; ?></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><?php echo $regis['provinsi']; ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php echo $regis['kota']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $regis['alamat']; ?></td>
                </tr>
                <tr>
                    <td>Postal code</td>
                    <td><?php echo $regis['kode_pos']; ?></td>
                </tr>
            </tbody>
        </table>

        <?php //include_once 'tabel.php' ?>
    </div>
    <script src="profile.js"></script>
</body>
</html>
