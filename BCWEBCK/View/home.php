
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
    <div>
        <a href="../View/changePWD.php">Change Password</a>
    </div>
    
    <div>
        <a href="../Controller/Logout.php">Logout</a>
    </div>

</body>
<!-- hello username -->


</html>