<!DOCTYPE html>
<html lang="en">
<?php include_once "../lib.php" ?>

<head>
    <title>PT.AES Contact Page</title>
    <link rel="stylesheet" href="CSS/stylecontact.css">
    <?php require 'cdn.php'; ?>
    <style>
        nav {
            background-color: #00657D !important;
        }

        .logo a {
            padding-left: 70px !important;
        }

        .searchbar {
            border: 1.25px solid #00657D !important;
        }

        .searchbar-container .searchbar button[type=submit] {
            background: #017390 !important;
        }

        .hero-container .grid-container .circle-circle2 .c2{
            padding-top: 10px !important;
        }
        
    </style>
</head>

<body>
    <?php require '../Landing Page/navigation.php' ?>
    <!--Hero-->
    <?php $kontak = findContact(); ?>
    <div class="hero">
        <div class="hero-container">
            <h1> Contact Us </h1>
            <div class="grid-container">
                <div class="circle-circle1"><img src="Img/phone-volume-solid.svg">
                    <h2>By Phone</h2><span class="info">Hubungi kami melalui nomor berikut ini:
                        <br>
                        <?php $no_telp = $kontak["no_telp"];
                        echo substr($no_telp, 0, 4) . "-" . substr($no_telp, 4, 4) . "-" . substr($no_telp, 8, 12); ?>
                    </span><img class="c1" src="Img/clock-fill.svg"><span class="time">08:30 - 17:30 WIB</span>
                </div>
                <div class="circle-circle2"><img src="Img/mail.png">
                    <h2>By Mail</h2><span class="info">Kirimkan pesan ke E-mail berikut: <br>
                        <?php echo $kontak["gmail"]; ?>
                    </span><img class="c2" src="Img/clock-fill.svg"><span class="time">24H</span>
                </div>
                <div class="circle-circle3"><img src="Img/geo-loc.svg">
                    <h2>Directly</h2><span class="info">
                        <?php echo $kontak["Lokasi"] ?>
                    </span><img class="c3" src="Img/clock-fill.svg"><span class="time">07:30 - 17:30 WIB</span>
                </div>
            </div>
        </div>
    </div>

    <!--Form-->
    <div class="body-2">
        <h1>Message Us</h1>
        <div class="grid-form">
            <form id="contact-us-form">
                <div>
                    <label for="name">Full name</label> <br>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email</label> <br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Message</label> <br>
                </div>
                <textarea id="message" name="message" rows="6" cols="50" required></textarea>
                <button type="submit">SEND</button>
            </form>
            <div class="add-box">
                <div class="fb-info">
                    <img src="Img/facebook-logo.png">
                    <span>
                        <?php echo $kontak["facebook"] ?>
                    </span>
                </div>
                <div class="tw-info">
                    <img src="Img/twitter-logo.png">
                    <span>
                        <?php echo $kontak["twitter"] ?>
                    </span>
                </div>
                <div class="ig-info">
                    <img src="Img/instagram-logo.png">
                    <span>
                        <?php echo $kontak["instagram"] ?>
                    </span>
                </div>
                <div class="mail-info">
                    <img src="Img\gmail-logo.png">
                    <span>
                        <?php echo $kontak["gmail"] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="Javascript/cp-js.js"></script>

</html>