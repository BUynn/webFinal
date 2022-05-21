
<?php
session_start();
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
        <?php
            echo "Hello ".$_SESSION['username'];
        ?>

    </div>
        <a href="login.php">Logout</a>
        <?php
        session_destroy();
        ?>
</body>
<!-- hello username -->


</html>