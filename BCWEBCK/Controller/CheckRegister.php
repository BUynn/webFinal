<?php
    require 'Config.php';
    require_once 'SendMail.php';
    ob_start();
    session_start();
    //check register
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //get data and add to database __account
        $sql = "INSERT INTO __account (username,password) VALUES ('$username','$password')";
        if(mysqli_query($conn,$sql)){
            //send mail
            sendMail($username,$password);
            echo "Register success";
        }else{
            echo "Register failed";
        }
        //
        header("Location: ../View/login.php");
    }
?>