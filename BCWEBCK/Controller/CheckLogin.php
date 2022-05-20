

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
            $_SESSION['username'] = $username;
            header("Location: ../View/index.php");
        }else{
            echo "Login failed";
        }
    }
?>
