<?php
    require 'config.php';
    ob_start();
    session_start();
    if(isset($_POST['recharge'])){
        //add recharge to database __money
        $username = $_SESSION['username'];
        $amount = $_POST['amount'];
        $sql = "SELECT * FROM __money WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $money = $row['money'];
            $money = $money + $amount;
            $sql = "UPDATE __money SET money = '$money' WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Recharge Successfully');</script>";
            }else{
                echo "<script>alert('Recharge Failed');</script>";
            }
            
        }
    }

?>