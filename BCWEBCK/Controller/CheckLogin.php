<?php
    require_once 'Config.php';
    ob_start();
    session_start();
    if(isset($_POST['login'])){
       //log in user and save session cookie
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM __account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        $_SESSION['username'] = $username;
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['status'] == 1){
               
                //set cookie
                setcookie('username',$username,time()+3600);
               //set session for log in 
               $_SESSION['change_first_password'] = 1;
               if($_SESSION['change_first_password'] == 1){
                    header('Location: ../View/home.php');
               } else {
                    header('Location: ../View/changeFirstPassword.php');
               }

            }else{
                
                header('Location: ../View/changeFirstPassword.php');
            
            }
        
        }else{
            //update error +1 after 1 time wrong
            $sql = "SELECT * FROM __account WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $error = $row['error'];
                $error = $error + 1;
                $sql = "UPDATE __account SET error = '$error' WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
            }
        } 
    }
?>
