<?php
    require_once 'Config.php';
    ob_start();
    session_start();
    //check register
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO __account (username,password) VALUES ('$username','$password')";
        if(mysqli_query($conn,$sql)){
            echo "Register success";
        }else{
            echo "Register failed";
        }

        //redirect to login page
        header("Location: ../View/login.php");
    }
?>