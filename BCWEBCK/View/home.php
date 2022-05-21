
<?php
    require_once '../Controller/CheckLogin.php';
    if(isset($_SESSION['username'])){
        echo "Welcome ".$_SESSION['username'];
    }else{
        header("Location: login.php");
    }  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <?php
        require 'layout/header.php';
    ?>
    <?php
        require_once '../Controller/CheckLogin.php';
        if(isset($_SESSION['username'])){
            //select role
            $username = $_SESSION['username'];
            $sql = "SELECT role FROM __account WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $role = $row['role'];
                if($role == 1){
                ?>  <div>
                <a href="../View/manageAccount.php">Manage Account</a>
                <div>
                    <a href="../View/changePWD.php">Change Password</a>
                </div>
                <div>
                    <a href="../View/account_detail.php">View My Account</a>
                </div>
                <div>
                    <a href="../View/recharge.php">Recharge</a>
                </div>
                <div>
                    <a href="../Controller/Logout.php">Logout</a>
                </div>
                </div>
            <?php
                }else{
                ?>
                <div>
                    <a href="../View/changePWD.php">Change Password</a>
                </div>
                <div>
                    <a href="../View/account_detail.php">View Account</a>
                </div>
                <div>
                    <a href="../View/recharge.php">Recharge</a>
                </div>
                <div>
                    <a href="../Controller/Logout.php">Logout</a>
                </div>
                <?php
                }
            }
        }else{
            header("Location: login.php");
        }
    ?>
     <?php
        require 'layout/footer.php';
    ?>

</body>
<!-- hello username -->


</html>