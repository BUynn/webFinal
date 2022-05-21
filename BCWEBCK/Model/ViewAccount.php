<?php
    require_once '../Controller/Config.php';
    ob_start();
    session_start();
    //view account detail
    //get data in database
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM __account WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
        $dob = $row['dob'];
    }
    //get data to form
    




?>