<?php
require "../signup/config.php";
require "lib.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (login($email, $password)) {
    // Redirect based on the level retrieved from the database
    if ($_SESSION['level'] === 'user') {
        header('Location: ../profile/profile.php');
    } elseif ($_SESSION['level'] === 'admin') {
        header('Location: ../Admin-Main Dashboard (PHP)/AdminDashboard.php');
    }
} else {
    $_SESSION['flash_message'] = "Password or email is wrong";
    header('Location: login.php');
    exit();
}
?>
