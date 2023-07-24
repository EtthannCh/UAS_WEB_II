
    <style>

        #footer{
            background-color: #000000;
            align-items: center;
            justify-content: center;
            height: 420px;
            width: 100%;
        }

        .top-footer .grid{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .top-footer .grid .footer-title1 h5, .footer-title2 h5{
            color: white;
            padding-top: 30px;
            padding-left: 130px;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .top-footer .grid .footer-title1 a, .footer-title2 a{
            color: white;
            padding-left: 130px;
            font-size: 10px;
            text-decoration: none;
        }
        
        .top-footer .grid .footer-title1 p, .footer-title2 p{
            margin-bottom: 0;
        }


        .top-footer .grid .footer-title1 a:hover, .footer-title2 a:hover{
            text-decoration: underline;
        }

        .top-footer .grid .add-box{
            margin-top: 40px;
            margin-left: 300px;
            margin-right: 0;
            width: 250px;
            height: 200px;
            background-color: #262626;
            box-shadow: 0 2px 4px rgba(46, 46, 46, 0.8);
        }

        .add-box .fb-info{
            padding-top: 20px;
            padding-left: 30px;
        }

        .add-box .fb-info img{
            background-color: white;
            border-radius: 50%;
            width: 25px;
        }

        .add-box .tw-info{
            padding-top: 8px;
            padding-left: 25px;
        }

        .add-box .tw-info img{
            width: 40px;
        }

        .add-box .ig-info{
            padding-top: 4px;
            padding-left: 28px;
        }

        .add-box .ig-info img{
            width: 30px;
        }

        .add-box .mail-info{
            padding-top: 14px;
            padding-left: 25px;
        }

        .add-box .mail-info img{
            width: 35px;
        }

        .add-box span{
            display: inline-block;
            padding-left: 20px;
            vertical-align: 0.5em;
            color: white;
            font-size: 12px;
        }

        .add-box .tw-info span{
            display: inline-block;
            padding-left: 9px;
            vertical-align: 1.2em;
        }

        .add-box .ig-info span{
            padding-left: 14px;
            vertical-align: 0.7em;
        }

        .add-box .mail-info span{
            padding-left: 12px;
            vertical-align: 0.5em;
        }

        #footer hr{
            margin-left: 70px;
            margin-right: 70px;
            margin-top: 20px;
            width: 87%;
            color: white;
            border-top: white;
        }

        .bott-footer{
            font-size: 10px;
            color: white;
            margin-top: 10px;
            margin-left: 70px;
            margin-right: 95px;
        }

        .bott-footer a{
            position: inline-block;
            margin: 0;
            padding: 0;
            color:white;
        }
    </style>

    <!--Footer-->
    <div id = "footer">
        <div class = "top-footer">
            <div class = "grid">
                <div class = "footer-title1">
                    <h5>PRODUCT</h5>
                    <p> <a href = "#">Active Speaker</a></p>
                    <p> <a href = "#">Air Conditioner</a></p>
                    <p> <a href = "#">Air Cooler</a></p>
                    <p> <a href = "#">Air Purifier</a></p>
                    <p> <a href = "#">Dryer</a></p>
                    <p> <a href = "#">Electric Fan</a></p>
                    <p> <a href = "#">Freezer</a></p>
                    <p> <a href = "#">Kulkas</a></p>
                    <p> <a href = "#">Mesin Cuci</a></p>
                    <p> <a href = "#">Microwave</a></p>
                    <p> <a href = "#">Oven</a></p>
                    <p> <a href = "#">Televisi</a></p>
                </div>
                <div class = "footer-title2">
                    <h5>CONTACT</h5>
                    <p> <a href = "#">By Phone</a></p>
                    <p> <a href = "#">By Mail</a></p>
                    <p> <a href = "#">Directly</a></p>
                </div>
                <div class = "add-box">
                        <div class = "fb-info">
                            <img src = "Img/facebook-logo.png">
                            <span>PT. AES</span>
                        </div>
                        <div class = "tw-info">
                            <img src = "Img/twitter-logo.png">
                            <span>AES</span>
                        </div>
                        <div class = "ig-info">
                            <img src = "Img/instagram-logo.png">
                            <span>AES_Electronics</span>
                        </div>
                        <div class = "mail-info">
                            <img src = "Img\gmail-logo.png">
                            <span>Electronics@AES.co.id</span>
                        </div>
                </div>
            </div>
        </div>
        <hr>
        <div class = "bott-footer">
            <div class = "container">
                @2023 AES. Semua hak dilindungi undang-undang
                <div class = "policy">
                    <a href = "#">Ketentuan Pengguna </a> |
                    <a href = "#">Kebijakan Privasi Web </a> |
                    <a href = "#">Kebijakan Privasi Produk </a> |
                    <a href = "#">Pengaturan Cookie</a>
                </div>
                Indonesia
            </div>
        </div> 
    </div>
