//update password
<?php
    require_once 'Config.php';
    ob_start();
    session_start();
    if(isset($_POST['change_password'])){
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM __account WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            if($new_password == $confirm_password){
                $sql = "UPDATE __account SET password = '$new_password', status = 1 WHERE username = '$username'";

                $result = mysqli_query($conn,$sql);
                if($result){
                    //render to home
                    header('Location: ../View/home.php');
                }else{
                    echo "Change password fail";
                }
            }else{
                echo "Confirm password not match";
            }
        }else{
            echo "Wrong old password";
        }
    }
?>