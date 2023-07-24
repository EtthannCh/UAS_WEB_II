<?php 
    require_once '../signup/config.php'; 
    require_once 'lib_db_product.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.AES Product Category Page</title>
    <link rel="stylesheet" href="CSS/product-catalog.css">
    <?php require 'cdn.php';?>
    <style>
        nav .container{
            padding-left: 70px;
        }

        .grid-container .produk .box{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .grid-container .produk .box img{
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .hero .grid-container .produk h5{
            margin-top: 10px;
            text-align: center;
            font-weight: 400;
        }

        .hero .grid-container .produk h6{
            font-weight: 400;
            text-align: center;
            color: #454545;
        }

        .hero .grid-container .produk hr{
            margin-top: 5px;
            margin-bottom: 5px;
            color: #7d7d7d;
            border-width: 1px;
        }

        .hero .grid-container .produk ul{
            padding-left: 15px;
        }

        .hero .grid-container .produk ul li{
            font-size: 11px;
        }

        .hero .grid-container .produk ul li sup{
            font-size: 6px;
        }

        .hero .grid-container .produk .price{
            text-align: center;
            color: red;
            font-size: 14px;
            font-weight: 500;
        }

        .hero .grid-container .produk .price-before{
            text-align: center;
            font-size: 12px;
            font-weight: 400;
            color: #787878;
            padding-bottom: 10px;
        }

        .hero .grid-container .produk a.detail{
            color: red;
            font-size: 14px;
            font-weight: 600;
            padding: 2px 10px;
            border-style: solid;
            border-radius: 30px;
            margin-left: 25%;
        }

        .hero .grid-container .produk a.detail:hover{
            color:white;
            background-color: red;
        }
    </style>
</head>

<body>
    <?php require '../Landing Page/navigation.php'?>
    <!--Hero-->
    <div class = "hero">
        <div class = "container-cat">
            <a href = "../Product Category (PHP)/product-category.php"><img src = "Image/arrow-left.svg"></a>
            <?php
            $id = $_GET['category_id'];
            $categoryName = getCategory($id);?>
            <h1><?php 
            foreach ($categoryName as $CatName) {
                echo $CatName['nama_kategori'];?></h1>
            <?php }?>
        </div>
        <div class = "brand-container">
            <?php $merk = getMerkCatalog($id);?>
            
            <div class="brand" style="margin-left: 8%;margin-right: 8%">
            <?php 
            foreach ($merk as $merkCatalog) 
            {?>
                <a href = "product-catalog.php?category_id=<?php echo $id;?>&kode_merk=<?php echo $merkCatalog['kode_merk'];?>" style="padding-left:35px; padding-right:35px;"><?php echo $merkCatalog['nama_merk'].' ';
            }?></a>
            </div>
        </div>

        <!--Product-->
        <?php
        if(isset($_GET['kode_merk'])){
            $kodemerk= $_GET['kode_merk'];
            $MerkName = getMerkBySelection($kodemerk);?>
        <h3>
        <?php echo $MerkName['nama_merk'];?></h3>

        <div class = "grid-container">
           <?php 
            $data = getProductCatalog($id, $kodemerk);
            foreach($data as $product){?>
                <div class = "produk">
                    <div class = "box"> <img src = "Image/<?php echo $product['gambar'];?>"></div>
                    <h5><?php echo $product['nama_produk'];?></h5>
                    <h6>
                        <?php 
                            $addInfo = explode(':', $product['info_tambahan']);
                            echo $addInfo[1];
                        ?>
                    </h6>
                    <hr>
                    <ul>
                        <?php 
                        for ($i=0; $i < 3; $i++) { 
                            ?><?php 
                            $fiturProduk = explode('|', $product['fitur']); 
                            $countFitur = count($fiturProduk);
                            for ($i=0; $i < $countFitur; $i++) { 
                              echo "<li>" . $fiturProduk[$i] . "</li>";
                            }
                            ?>
                        <?php }?>
                    </ul> 
                    <p class = "price">Rp. <?php echo number_format($product['harga_awal']-$product['diskon'], 0, ',', '.');?>,00</p>
                    <p class = "price-before" style = "text-decoration: line-through;">Rp. <?php echo number_format($product['harga_awal'], 0 , ',', '.');?>,00</p>
                    <?php 
                        $kode_produk = $product['kode_produk'];
                        $kodeProduk = getProductBy($kode_produk);
                    ?>
                    <a class = "detail" href = "../Product Detail (PHP)/deskripsi.php?category_id=<?php echo $id?>&kode_merk=<?php echo $kodemerk?>&kode_produk=<?php echo $kodeProduk['kode_produk']?>">Lebih detail</a>
                </div>
            <?php } ?>
        </div>
        <?php }?>
    </div>

    <?php require '../Landing Page/footer.php'?>
</body>
</html>
