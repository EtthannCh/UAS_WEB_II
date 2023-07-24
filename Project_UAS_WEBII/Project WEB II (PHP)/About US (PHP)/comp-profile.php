<!DOCTYPE html>
<html lang="en">
<?php include_once "../lib.php" ?>

<head>
    <title>PT.AES Contact Page</title>
    <link rel="stylesheet" href="CSS/companyprofile.css">
    <?php require 'cdn.php'; ?>
    <style>
        nav {
            background-color: #142E72 !important;
        }

        .searchbar {
            border: 1.25px solid #142E72 !important;
        }

        .searchbar-container .searchbar button[type=submit] {
            background: #1a3b8f !important;
        }

        .grid-container .circle {
            background-image: url("Img/building.jpg") !important;
        }
    </style>
</head>

<body>
    <?php require '../Landing Page/navigation.php' ?>
    <!--Hero-->
    <?php 
        $kontak = findContact(); 
        $About = findAboutUS();
    ?>
    <div class="hero">
        <div class="hero-container">
            <h1>PT. AES</h1>
            <div class="grid-container">
                <p> <?php echo $About['intro'];?></p>
                <div class="circle">
                </div>
            </div>
            <div class="add-info">
                <div class="loc-info">
                    <img class="location-icon" src="Img/geo-loc.svg">
                    <span>
                        <?php echo $kontak["Lokasi"] ?>
                    </span>
                </div>
                <div class="clo-info">
                    <img class="clock-icon" src="Img/clock-fill.svg">
                    <span> <?php echo $About['waktu_buka']?></span>
                </div>
                <p> Call Center:
                    <?php $no_telp = $kontak["no_telp"];
                    echo substr($no_telp, 0, 4) . "-" . substr($no_telp, 4, 4) . "-" . substr($no_telp, 8, 12); ?>
                </p>
            </div>
            <div class="brand-info">
                <h5>Brand:</h5>
                <div class="brand-container">
                    <?php 
                    $Logo = findLogoBrand();
                    foreach ($Logo as $Brand) {?>
                    <img src="Img/<?php echo $Brand['gambar']?>">
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <!--Picture Showcase-->
    <div class="body2">
        <div class="container">
            <div class="img-container">
                <img class="img-item1" src="Img/<?php echo $About['gambar_1'];?>">
                <img class="img-item2" src="Img/<?php echo $About['gambar_3'];?>">
                <img class="img-item3" src="Img/<?php echo $About['gambar_2'];?>">
            </div>
            <p><?php echo $About['isi'];?></p>
        </div>
    </div>

    <?php require '../Landing Page/footer.php' ?>
</body>

</html>