<?php 
session_start();
$message ="";
if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'head.php'?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<style>
    .jconfirm .jconfirm-box {
    background: white;
    border-radius: 4px;
    position: relative;
    outline: 10;
    padding: 15px 10px 0;
    overflow: hidden;
    margin-left: 10px;
    margin-right: 1px;
    text-align: center;
    right: -130%;
    background-color: ;
}
.jconfirm-box-container{
    width: 400px;
    align-items: center;
    text-align: center;
    right: 50%;

}
.btn-red{
    color: red;
}
</style>
</head>

<body>
<?php include_once 'nav.php';

?>

    <form action="login_check.php" class="box" method="post" enctype="multipart/form-data">
        <div class="form" id="form">
            <div class="inputBox">
                <input type="email" id="email" name="email" required style="color:white">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox" id="passwordInput">
                <input type="password" name="password" id="password-input" required style="color: white;">
                <span>Password</span>
                <i></i>
            </div>
            <div class="tnc">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-white"
                        style="font-size: 14px; opacity: 80%; justify-content: left;" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <a href="#" class="forget">Forget Password?</a>
            </div>
            <br><br>
        <input type="submit" class="login">
            <p class="Or">OR</p>
            
            <div class="social-media">
                <i class="fa-brands fa-facebook social-media-icons"></i>
                <i class="fa-brands fa-apple social-media-icons"></i>
                <i class="fa-brands fa-google social-media-icons"></i>
            </div>
            <p class="signup">No Account ? <strong><a href="../signup/Signup.php">sign up</a></strong> here! <strong>
                

        </div>
        </form>
    <!-- //<script src="login.js"></script> -->
    <script>
    <?php
    if($message!=""){
        // Display the floating alert using the $.alert function
        echo "var options = {
            content: '$message',
            title: 'Error',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Close',
                    btnClass: 'btn-red',
                    action: function() {
                        // Do something when the close button is clicked
                    }
                }
            }
        };
        $.alert(options);";
    }
    ?>
</script>

<script>
        <?php
        // if($message!=""){
        //     echo "alert('$message')";
        // }
        ?>
    </script>

</body>

</html>