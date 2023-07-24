<?php include_once "../lib.php";
require_once '../Login/lib.php';
if(cekLogin()){
// include_once "save_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

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
    <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-LC8AaNU9aWvQbMgW8xB7P1wvYwp6Nef8/h9ccsLsopK4BdbnNmyapzGPTnuBlgDH"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap@5.7.0/dist/js/bootstrap.min.js"
        integrity="sha384-TSSU7HdRb7kfdqHhI62Nczh3EBL9D4dfgXjl8tgRQcX69tHEDrAK5BNo+Uv0HNva"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <section id="alamat">
            <div class="alamat-content">
                <div class="hero-alamat">
                    <h2>Alamat</h2>
                    <a href="#">Alamat Lainnya</a>
                </div>
                <div class="data-alamat">
                    <label class="nama" id="nama">Ethan</label>
                    <label class="nomor" id="nomor">081234567890</label>
                    <label class="alamat" id="alamatRumah">Jln.Abcd</label>
                </div>
            </div>
        </section>
        <section id="jlh-barang">
            <div class="ket-barang">
                <h2>Barang</h2>
                <h2>Harga</h2>
            </div>

            <!-- <div class="tidakAdaProduk"></div> -->
            <?php
            $id_user = $_GET["id"];
            $data = findDataById($id_user);
            $imgTest = "img2.jpg";
            $_SESSION["abc"] = "bbca";
            $namaProduk;
            $total = 0;
            foreach ($data as $value) {
                $namaProduk = $value["nama_produk"];
                $id_produk = $value["id_produk"];
                echo "<div class='barang'>";
                echo "<div class='desc-barang'>";
                echo "<img src='../Log in/Image/11Kg Mesin Cuci dengan QuickDrive.jpg' class='gmbr-produk' width='100px' height='100px'>";
                echo "<div class='bnyk-barang'>";
                echo "<label class='nama-barang' id='namaProduk'>" . $value['nama_produk'] . "</label>";
                echo "<div class='icon-barang'>";
                echo "<input type='number' class='num number' id='qtyProduk' value={$value['qty_produk']} min=1></input>";
                echo "<button class='update btn btn-success' value={$id_produk} data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Update</button>";
                echo "<button class='delete btn btn-danger' value={$id_produk} data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Remove</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<div class='harga-barang'>";
                echo "<span class='harga'>" . convertToRupiah($value["harga_produk"] * $value["qty_produk"]) . "</span>";
                echo "<input type='hidden' value={$value['harga_produk']} class='hargaProduk'></input>";
                echo "<input type='hidden' value={$value['id_user']} class='id_user'></input>";
                echo "</div>";
                echo "</div>";
                echo "<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'
        aria-labelledby='staticBackdropLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='staticBackdropLabel'>Confirmation</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Yes</button>
                </div>
            </div>
        </div>
    </div>";
                $total = findTotalHarga($id_user);
                ?>
                <!-- <div class="barang">
                <div class="desc-barang">
                    <img src="img/img2.jpg" alt="barang" width="100px" height="100px" class="gmbr-produk">
                    <div class="bnyk-barang">
                        <label class="nama-barang">Lorem ipsum dolor sit amet consectetur.</label>
                        <div class="icon-barang">
                            <span class="icon kurang op">-</span>
                            <span class="num">1</span>
                            <span class="icon tambah op">+</span>
                        </div>
                    </div>
                </div>
                <div class="harga-barang">
                    <span class="harga">50000</span>
                </div>
            </div> -->
            <?php }
            echo "<input type='hidden' value={$total} class='total_hargaSemua'></input>"; ?>
        </section>

        <section id="shipping">
            <h2>Pengiriman</h2>
            <div class="pilih-pengiriman">
                <div class="kurir">
                    <span class="pilih-kurir">
                        <?php
                        if (isset($_COOKIE["jenis_pengiriman"])) {
                            echo $_COOKIE["jenis_pengiriman"];
                        } else {
                            echo "Pilih Pengiriman";
                        }
                        ?>
                    </span>
                    <i class="fa-sharp fa-solid fa-truck-fast icon-truck"></i>
                    <i class="fa-solid fa-chevron-right icon-right"></i>
                </div>
                <span>Subtotal : Rp <span class="subTotal">
                        <?php if (isset($_SESSION["harga_pengiriman"])) {
                            echo $_SESSION["harga_pengiriman"];
                        } else {
                            echo "0";
                        }
                        ?>
                    </span></span>
            </div>
            <ul class="show-menu">
                <?php $shippingData = findAllShippingData();
                foreach ($shippingData as $value) {
                    $jenisPengiriman = $value["jenis_pengiriman"];
                    echo "<li>";
                    echo "<div class='harga-shipping'>";
                    echo "<span class='label-shipping' id='jenis_pengiriman' onclick='getJenis(event)'>" . $jenisPengiriman . " </span>";
                    echo "<span>Rp <span class='label-harga'>" . $value["harga_pengiriman"] . "</span></span>";
                    echo "</div>";
                    echo "</li>";
                    // echo "<input type='hidden'  class='jenisPengiriman'></input>";
                }
                ?>
            </ul>

        </section>

        <section id="payment">
            <h2>Pembayaran</h2>
            <div class="caraPembayaran">
                <span class="pilih-pembayaran" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                    aria-controls="offcanvasBottom">
                    <?php if (isset($_COOKIE["cara_pembayaran"])) {
                        echo $_COOKIE["cara_pembayaran"];
                    } else {
                        echo "Pilih Pembayaran";
                    } ?>
                </span></button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small div-bayar">
                        <div class="bank">
                            <h3>Bank</h3>
                            <ul class="listBank listBayar">
                                <li><a href="#">BCA</a></li>
                                <li><a href="#">BRI</a></li>
                                <li><a href="#">BNI</a></li>
                                <li><a href="#">Mandiri</a></li>
                            </ul>
                        </div>
                        <div class="e-wallet">
                            <h3>E-wallet</h3>
                            <ul class="listWallet listBayar">
                                <li><a href="#">OVO</a></li>
                                <li><a href="#">GOPAY</a></li>
                                <li><a href="#">LinkAja</a></li>
                                <li><a href="#">ShopeePay</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="footer" class="fixed-bottom">
            <div class="Payment">
                <span>Total :
                    <?php
                    // echo convertToRupiah($total+$harga_pengiriman); 
                    if (isset($_SESSION["harga_pengiriman"])) {
                        echo convertToRupiah(findTotalHarga($id_user) + $_SESSION["harga_pengiriman"]);
                    } else {
                        echo convertToRupiah(findTotalHarga($id_user));
                    }
                    ?>
                    <!-- <span class="totalHarga"></span> -->
                </span>
                <div class="proceedPayment">
                    <!--      -->
                    <a class="proceed" onclick="getData()" href="../After_Payment/index.php?id=<?php echo $id_user?>">Proceed</a>
                    <!--  -->
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </section>
    </div>



    <script src="index.js" type="text/javascript"></script>
    <script>
        let clicked;
        console.log(clicked);
        function getData() {
            const total_hargaSemua = document.querySelector(".total_hargaSemua").value;
            const id_user =document.querySelector(".id_user").value;
            document.cookie = "total_harga = " + total_hargaSemua;
            document.cookie = "action = update_pengiriman";
            document.cookie = "id_user = "+id_user;
            if (clicked) {
                $.post("save_data.php", {}, function (namas) {
                    console.log(namas)
                }).fail(function (err) {
                    console.error("err");
                })
            }

        }
        function getJenis(event) {
            clicked = true;
            if (clicked) {
                const jenisPengiriman = event.target.innerHTML;
                document.cookie = "jenis_pengiriman = " + jenisPengiriman;
                $.post("save_data.php", {}, function (namas) {
                    console.log(namas);
                }).fail(function (err) {
                    console.error("err");
                })
            }
        }

        let action = "";
        $(document).on("click", ".delete", function () {
            action = "hapus";
            var id = $(this).val();
            document.cookie = "id_produk = " + id;
            document.cookie = "action = " + action;
            $.post("save_data.php", {}, function (aksi) {
            }).fail(function (err) {
                console.error("err");
            })
        })
        $(document).on("click", ".update", function () {
            action = "update";
            var id = $(this).val();
            document.cookie = "id_produk = " + id;
            document.cookie = "action = " + action;
            $.post("save_data.php", {}, function (aksi) {
            }).fail(function (err) {
                console.error("err");
            })
        })
        $(document).on("input", "#qtyProduk", function () {
            qtyProduk = $(this).val();
            document.cookie = "qty_produk = " + qtyProduk;
        })
        // ClassicEditor
        //     .create(document.querySelector('#editor'))
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>

</body>

</html>
<?php } else if (!cekLogin()){header('location:../../Login/login.php');}?>