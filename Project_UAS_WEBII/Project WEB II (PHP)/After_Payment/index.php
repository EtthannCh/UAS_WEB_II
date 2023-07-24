<?php include_once "../signup/config.php";
include_once "../lib.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>

    <div class="container">
        <div class="containerResi">
            <h1>Nomor Resi</h1>
            <div class="divResi">
                <span class="noResi">223441331231</span>
                <span><i class="fa-solid fa-copy copy"></i></span>
            </div>
        </div>

        <hr>
        <div class="totalBayar">
            <span>Total yang harus dibayar</span>
            <span class="jumlahBayar">
                <?php $id_user = $_GET["id"];
                function generateKode($n){
                    $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $randomString = "";
                    for($x=0;$x < $n; $x++){
                        $index = rand(0,strlen($char)-1);
                        $randomString .= $char[$index];
                    };
                    return $randomString;
                };
                $kode = generateKode(5);
                ?>
                <?php echo convertToRupiah(findTotalHarga($id_user)+$_SESSION["harga_pengiriman"]);?>
            </span>
            <a href="loading.html " class="sudahBayar" onclick="action()">Sudah Bayar</a>
            <input type="hidden" value="<?php echo $kode?>" id="kode">
            <!--  -->
            <a href="../Product Category (PHP)/product-category.php" class="kembali">Kembali</a>
        </div>
    </div>



    <script src="index.js"></script>
    <script>
        function action() {
            const kode = document.getElementById("kode").value;
            $.post("save_data.php", { kode: kode }, function (data) {
                alert(data)
            })
        }
    </script>

</body>

</html>