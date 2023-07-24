<?php
require_once "../signup/config.php";
require_once "../lib.php";

$kode_produk = $_GET['kode_produk'];
$id_kategori = $_GET['category_id'];
$kode_merk = $_GET['kode_merk'];
$deskripsi = findProduct($kode_produk, $kode_merk, $id_kategori);
foreach ($deskripsi as $deskProduk) {
    $harga = $deskProduk['harga_awal'] - $deskProduk['diskon'];
    $hargaFormated = number_format($harga, 0, ".", ".");
    $data = $deskProduk['info_tambahan'];

    // Separate the data
    $parts = explode(":", $data);
    $capacityLabel = $parts[0];
    $capacityValue = $parts[1];

    $string = $deskProduk['fitur'];
    $string2 = $deskProduk['deskripsi'];
    $string3 = $deskProduk['deskripsi_topik'];

    $img = $deskProduk['gambar'];
    $segments = explode('|', $string);
    $segments2 = explode('|', $string2);
    $segments3 = explode('|', $string3);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.php"; ?>
    <style>
        .cont2 {
            margin-left: 50px;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cont2 img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        #num {
            font-size: 12px;
        }

        h2 {
            font-size: 15px;
            color: red;
            margin-top: 15px;
        }
        nav .menu ul {
            width: 270px !important;
            gap: 0px;
            margin-right: 120px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <?php include_once "../Landing Page/navigation.php" ?>
    <div>
        <h1 class="name" id="productName">
            <?php echo $deskProduk['nama_produk']; ?>
            <input type="hidden" id="kode_produk" value="<?php echo $deskProduk['kode_produk']?>">
        </h1>
        <div class="display">
            <div class="cont2">
                <?php echo "<td> <img src='Image/$img'></td>"; ?>
            </div>
            <div class="word">
                <p class="fitur">Fitur</p>
                <p class="size">
                    <?php echo "$capacityLabel"; ?>
                </p>
                <button id="num">
                    <?php echo "$capacityValue"; ?>
                </button>
                <?php foreach ($segments as $segment) {
                    echo "<ul><li>$segment</li></ul>";
                }
                ?>
                <h2 class="price">
                    <?php echo $harga ?>
                </h2>
                <input type="hidden" id="hargas" value="<?php echo $harga ?>">
                <button id="minus">-</button>
                <button id="number" style="font-size: 14px ;">1</button>
                <button id="plus">+</button>
                <br>
                <?php if(cekLogin()){?>
                <a class="add-cart" id="add-to-cart" onclick="getData()">Add to cart</a>
                <?php } else {?>
                <a class="add-cart" href = "../Login/Login.php">Add to cart</a>
                <?php }?>

            </div>

        </div>
        <div class="spec">
            <p class="spec-start">Spesifikasi/Deskripsi</p>
            <br>
            <?php
            $length2 = max(count($segments2), count($segments3));
            for ($i = 0; $i < $length2; $i++) {
                if (isset($segments3[$i])) {
                    echo "<p><strong>" . trim($segments3[$i]) . "</strong></p> <br>";
                }
                if (isset($segments2[$i])) {
                    echo "<p>" . trim($segments2[$i]) . "</p> <br>";
                }
            }
            ?>

        </div>
        <br>
        <br>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    </div>

</body>
<script src="js/js1.js"></script>
<script>
    function getData() {
        let nama = document.querySelector("#productName").innerHTML;
        let kode_produk = $("#kode_produk").val();
        let qty_produk = $("#number").text();
        let harga = $("#hargas").val();
        $.post("save-data.php", { nama_produk: nama, kode: kode_produk, qty: qty_produk, harga: harga }, function (data) {
            window.location.href="../Payment_Page/index.php?id=<?php echo $_SESSION['id_user']; ?>";
        })
    }
</script>
<?php include_once "../Landing Page/footer.php" ?>

</html>