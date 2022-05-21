<?php
    require_once '../Controller/Config.php';
    ob_start();
    session_start();
    //view account detail
    //get data in database
    $username = $_SESSION['username'];
    //select account is verified
    $sql = "SELECT * FROM __account where isVerify = 1";
    $result = mysqli_query($conn,$sql);
    $sql1 = "SELECT * FROM __account where isVerify = 0";
    $result1 = mysqli_query($conn,$sql1);

?>