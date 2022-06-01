<?php
    session_start();
    require 'Config.php';
    //check otp form database
    $username = $_SESSION['usernameOTP'];
    $otp = $_POST['otp'];
    $sql = "SELECT * FROM __account WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $otp_db = $row['otp'];
        if($otp == $otp_db){
            //destroy session
            //render to home
            //set otp in database = 0
            $sql = "UPDATE __account SET otp = 0 WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
            if($result){
                header('Location: ../View/changeFirstPassword.php');
            }else{
                echo "Change password fail";
            }
        
        }else{
            echo "Wrong OTP";
        }
    }else{
        echo "Wrong username";
    }


    
?>