<?php
    require 'config.php';
    require '../Controller/SendMailTransfer.php';
    ob_start();
    session_start();
    if(isset($_POST['recharge'])){

        //check username and amount
        $username = $_POST['account'];
        $amount = $_POST['amount'];
        $sql = "SELECT * FROM __money WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $money = $row['money'];
            if($money >= $amount){
                $money = $money + $amount;
                //select omney from __money
                $sql = "SELECT * FROM __money WHERE username = '$_SESSION[username]'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $temp = $row['money'] - $amount;
                $sql = "UPDATE __money SET money = '$temp' WHERE username = '$_SESSION[username]'";
                $result = mysqli_query($conn,$sql);
                //update __money
                $sql = "UPDATE __money SET money = '$money' WHERE username = '$_POST[account]'";

                //select infor from account
                $sql = "SELECT * FROM __account WHERE username = '$_POST[account]'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $email = $row['email'];
                sendMailTransfer($email,$money,$_POST['account']);
                echo "<script>alert('Transfer Successfully');window.location.href='../View/transfer.php';</script>";
            } else {
                echo "<script>alert('Not enough money');window.location.href='../View/transfer.php';</script>";
            }
        }
       
    } else {
        echo "<script>alert('Please input username or money');window.location.href='../View/transfer.php';</script>";
    }
?>