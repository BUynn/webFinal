<?php
    require_once '../Controller/Config.php';
    ob_start();
    session_start();
    //view account detail
    //get data in database
    $username = $_SESSION['username'];
    //select account is verified
    $sql = "SELECT * FROM __account where isActived = 1";
    $result = mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM __account where isActived = 0";
    $result2 = mysqli_query($conn,$sql2);

?>