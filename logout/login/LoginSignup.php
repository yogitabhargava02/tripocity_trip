<?php
include "config.php";
if(isset($_POST['submit_login'])){
    $email = mysqli_real_escape_string($conn,htmlentities($_POST['email']));
    $password = mysqli_real_escape_string($conn,htmlentities($_POST['password']));
    $sql_check = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($conn,$sql_check);
    if(mysqli_num_rows($result) == 1){
        // header("Location: ../");
        header("Location: ../logout.php");
        exit;
    }else{
        echo "login unsuccessful";
    }
}

if(isset($_POST['submit_registration'])){
    $username = htmlentities($_POST['username']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $cpassword = htmlentities($_POST['cpassword']);
    $sql_insert = "INSERT INTO users(name,password,cpassword,email) VALUES('{$username}','{$password}','{$cpassword}','{$email}')";
    $result = mysqli_query($conn,$sql_insert);
    if($result){
        // echo "signup successful";
        header("Location: ../index.php");
        exit;
    }else{
        echo "signup failed";
    }
}
?>