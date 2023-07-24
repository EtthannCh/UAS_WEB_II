<?php
require_once "config.php";
require_once "lib_db_admin.php";
$id = '1';
$regis1 = findAllKontak();
$regis = findAbout($id);
$img1 = $regis['gambar_profile'];
$img2 = $regis['gambar_1'];
$img3 = $regis['gambar_2'];
$img4 = $regis['gambar_3'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.AES Contact Page</title>
    <link rel="stylesheet" href="CSS/companyprofile.css">
    <?php require 'cdn.php';?>
    <style>
        nav{
            background-color: #142E72 !important;
        }

        .searchbar{
            border: 1.25px solid  #142E72 !important;
        }

        .searchbar-container .searchbar button[type=submit]{
            background: #1a3b8f !important;
        }

        .grid-container .circle{
            background-image: url("../Img/building.jpg");
        }
        .cont {
            position: relative; 
            width: 200px;
            height: 200px;
            background-color: #fff; 
            margin: 0 auto; 

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
    <?php require 'navigation.php'?>
    <!--Hero-->
    <div class = "hero">
        <div class = "hero-container">
            <h1>PT. AES</h1>
            <div class = "grid-container">
                <?php echo $regis['isi'];?>
                <div class = "circle">
                <div class="cont">
                <?php echo "<img src='img/$img1'width='100px' height='100px'></td>";?>
                </div>
                </div>
            </div>
            <div class = "add-info">
                <div class = "loc-info">
                    <img class = "location-icon" src = "Img/geo-loc.svg"> 
                    <span> Jl. sudah sampai No. 1A, Medan, Sumatera Utara, Indonesia (Kantor Pusat) </span>
                </div>
                <div class = "clo-info">
                    <img class = "clock-icon" src = "Img/clock-fill.svg"> 
                    <span > 07.30 - 17.30 WIB </span>
                </div>
                <p> Call Center: 06xx - xxxxx </p>
            </div>
            <div class = "brand-info">
                <h5>Brand:</h5>                
                <div class = "brand-container">
                <?php foreach($regis1 as $row) {

                    	$img = $row['gambar'];
                        ?>

                    <img src="img/<?php echo $img;?>" alt="">
                
               <?php }?>
                </div>
            </div>
        </div>
    </div>
                

    <!--Picture Showcase-->
    <div class = "body2">
        <div class = "container">
            <div class = "img-container">
                <?php echo "<img class='img-item1' src='img/$img2' width='100px' height='100px'>";?>
                <?php echo "<img class='img-item2' src='img/$img3' width='100px' height='100px'>";?>
                <?php echo "<img class='img-item3' src='img/$img4' width='100px' height='100px'>";?>
            </div>
            <p>Kantor pusat PT. AES berlokasi di Medan, Sumatera Utara dan toko cabangnya tersebar di berbagai daerah di kota Binjai, Padang Sidempuan, Pematangsiantar, Medan, Tanjungbalai, Tebing Tinggi dan Sibolga.</p>
        </div>
    </div>

    <?php require 'footer.php'?>
</body>
</html>
