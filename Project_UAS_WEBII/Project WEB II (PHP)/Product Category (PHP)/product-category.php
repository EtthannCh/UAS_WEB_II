<?php
require_once '../signup/config.php';
require_once 'lib_db_product.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.AES Product Category Page</title>
    <link rel="stylesheet" href="CSS/product-catstyle.css">
    <?php require 'cdn.php';?>
    <style>      
    .logo a{
        padding-left: 70px !important;
    }
    </style>
</head>

<body>
    <?php require '../Landing Page/navigation.php'?>

    <!--Hero-->
    <div class = "hero">
        <div class = "hero-container">
            <h2> NEW ARRIVAL PRODUCT!</h2>
                <div class = "container">
                    <div class = "circle1"> <h5>NEW !</h5> </div>
                    <div class = "box-promote1">
                        <?php 
                            $data = getProductBy('RS62T5F01B4/SE');?>
                        <img class = "product1" src = "Image/<?php echo $data['gambar'];?>">
                            <h5>
                                <?php $MerkName = getMerkBySelection('SMG');
                                echo $MerkName['nama_merk'];?>
                            </h5>
                            <p class = "tipe1"><?php echo $data['nama_produk']?></p>
                            <p class = "tipe2"><?php echo $data['kode_produk']?></p>
                            <p class = "price">Rp.<?php echo number_format($data['harga_awal']-$data['diskon'], 0, ',', '.');?>,00</p>
                            <a href = "../Product Detail (PHP)/deskripsi.php? category_id=8 & kode_merk=SMG &kode_produk=RS62T5F01B4/SE"> Lebih detail </a>
                    </div> 
                    <div class = "circle2"> <h5>NEW !</h5> </div>
                    <div class = "box-promote2">
                    <?php 
                            $data = getProductBy('TCL43Q72');?>
                        <img class = "product2" src = "Image/<?php echo $data['gambar'];?>">
                            <h5>
                                <?php $MerkName = getMerkBySelection('TCL');
                                echo $MerkName['nama_merk'];?>
                            </h5>
                            <p class = "tipe1"><?php echo $data['nama_produk']?></p>
                            <p class = "price">Rp.<?php echo number_format($data['harga_awal']-$data['diskon'], 0, ',', '.');?>,00</p>
                            <a href = "../Product Detail (PHP)/deskripsi.php?category_id=12 & kode_merk=TCL &kode_produk=TCL43Q72"> Lebih detail </a>
                    </div> 
                </div>
        </div>
    </div>

    <!--Body2-->
    <div class = "body2">
        <h1>CHOOSE THE CATEGORY</h1>
            <div class = "grid-container">
                <?php 
                // for($id = 1; $id <= 12; $id++){   
                    $row = findCategory();
                    foreach ($row as $rows) {?>
                        <div class = "grid-item">
                            <img src = "Image/<?php echo $rows['gambar_kategori'];?>">
                            <a href = "../Product Catalog (PHP)/product-catalog.php?category_id=<?php echo $rows['id_kategori'];?>" style = "padding-left: 50px; text-align:center;"><?php echo $rows['nama_kategori'];?></a>
                        </div>
                    <?php }?>
            </div>
    </div>
    <?php require '../Landing Page/footer.php' ?>
</body>