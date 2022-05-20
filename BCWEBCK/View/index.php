
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
    <h1>Hello World</h1>
    <a href="login.php">Logout</a>
    <?php
    session_destroy();
    ?>

</body>
</html>