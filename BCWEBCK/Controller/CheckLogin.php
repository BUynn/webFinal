

<?php
    require_once 'Config.php';
    ob_start();
    session_start();
    //check login
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM __account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            //check if status = 0 move to change password
            $row = mysqli_fetch_assoc($result);
            if($row['status'] == 0){
                $_SESSION['username'] = $username;
                header('Location: ../View/changePassword.php');
            }else{
                $_SESSION['username'] = $username;
                header('Location: ../View/home.php');
            }
        }else{
           //set text to html wrong username or password
            echo "Wrong username or password";
        }
    }
?>
