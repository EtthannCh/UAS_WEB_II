<?php
require_once "../signup/config.php";

function cekLogin(){
    if(isset($_SESSION['email'])){
        return true;
    } else {
        return false;
    }
}
function login($email, $password){
    global $conn;
    
    $query = $conn->prepare("SELECT * FROM tbl_user WHERE email = :email AND password =:password");
    $query->execute(array(
        'email' => $email,
        'password' => $password));
   
        //$query ->fetchall();
        $count = $query -> rowCount();
        if($count >0){
            $row = $query->fetch();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION['level'] = $row['level'];
            return true;
        }
        else{
            return false;
        }
    }