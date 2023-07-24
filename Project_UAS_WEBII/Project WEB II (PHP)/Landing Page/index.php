<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "head.php" ?>
    <?php include_once "cdn.php" ?>
    <style>
        nav .container{
            margin-left: 0;
        }
        
        nav .container .logo a{
            padding-left: 62.5px;
        }

        nav .container .menu ul{
            margin-left: 103.5px!important;
        }

        nav .container .searchbar-container{
            margin-left: 78px!important;
        }

        .searchbar-container .searchbar button[type=submit]{
            padding-left: 8px!important;
            margin-left: 47px!important;
            padding-top: 0px!important;
            padding-bottom: 0px!important;
        }

        .navbar-icon ul{
            margin-left: 0px!important;
        }
        .navbar-icon{
            margin-left: 56px!important;
            margin-right: 80!important;
        }

        @media (min-width: 1200px){
            .container{
                max-width: 1250px!important;
            }
        }

    </style>
</head>

<body>
    <!--Navigation Bar-->

    <?php include_once "../Landing Page/navigation.php" ?>
    
    <div id="home">
        <div class="container">
            <div class="container-bg">
            </div>
            <div class="parallax-content">
                <h1>SHOP WITH US</h1>
                <div class="fade-in">
                    <button class="btn btn-dark btn-outline-light btn-lg">LEARN MORE</button>
                    <button class="btn btn-dark btn-outline-light btn-lg">LEARN MORE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="hr">
        <hr>
    </div>


    <div id="features">
        <h2 class="">WHY AES</h2>
        <div class="container-features fadeIn-div">
            <div class="features-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col">
                        <p>Dijamin lebih murah. </p>
                    </div>
                    <div class="col-md-4 col-sm-6 col">
                        <p>Diawasi OJK</p>
                    </div>

                    <div class="col-md-4 col-sm-6 col">
                        <p>Didukung oleh perusahaan ternama</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-features fadeIn-div">
            <div class="features-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col">
                        <p>Promo Berlimpah</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col">
                        <p>Gratis Ongkir</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col">
                        <p>Cashback Berlimpah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hr">
        <hr>
    </div>

    <div class="wrappers">
        <div class="container-scrollx">
            <div class="h2-features">
                <h2>FEATURES</h2>
            </div>

            <section class="scroll-section">
                <span class="animateSpan">Didukung oleh perusahaan ternama</span>
            </section>
            <section class="scroll-section">
                <span class="animateSpan">
                    Gratis Ongkir
                </span>
            </section>
            <section class="scroll-section">
                <span class="animateSpan">Cashback Berlimpah</span>
            </section>
        </div>
    </div>

    <div class="hr">
        <hr>
    </div>
    <?php include_once "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <script src="index.js"></script>
</body>

</html>