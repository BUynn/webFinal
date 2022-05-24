<?php
    require 'config.php';
    require '../Controller/SendMailTransfer.php';
    ob_start();
    session_start();
    if(isset($_POST['recharge'])){

        //check username and amount
        $username = $_POST['account'];
        $usernamesend = $_SESSION['username'];
        $amount = $_POST['amount'];
        $sql = "SELECT * FROM __money WHERE username = '$usernamesend'";
        $result = mysqli_query($conn,$sql);
        $dateSend = date("Y-m-d H:i:s");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $money = $row['money'];
            if($money >= $amount){
               if($amount > 5000000){
                    //insert into __accepttransfer
                    $sql = "INSERT INTO __accepttransfer(usernamesend, username, amount, date)
                    VALUES ('$usernamesend','$username','$amount','$dateSend')";
                    $result = mysqli_query($conn,$sql);
                    showAlert("Amount is more than 5000000. Waiting for accept transfer", "../View/transfer.php");
               } else {
                    // $money = $money + $amount;
                    //select omney from __money
                    // $sql = "SELECT * FROM __money WHERE username = '$_SESSION[username]'";
                    // $result = mysqli_query($conn,$sql);
                    // $row = mysqli_fetch_assoc($result);
                    $temp = $money - $amount;
                    $sql = "UPDATE __money SET money = $temp WHERE username = '$_SESSION[username]'";
                    $result = mysqli_query($conn,$sql);
                    //update __money
                    $sql = "UPDATE __money SET money = money + $amount WHERE username = '$_POST[account]'";
                    $result = mysqli_query($conn,$sql);
                    //select infor from account
                    $sql = "SELECT * FROM __account WHERE username = '$_POST[account]'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    $email = $row['email'];
                    sendMailTransfer($email,$amount,$_SESSION['username']);
                    echo "<script>alert('Transfer Successfully');window.location.href='../View/transfer.php';</script>";
               }
            } else {
                echo "<script>alert('Not enough money');window.location.href='../View/transfer.php';</script>";
            }
        }
       
    } else {
        echo "<script>alert('Please input username or money');window.location.href='../View/transfer.php';</script>";
    }
    function showAlert($message, $href)
    {
        echo "<script>
        alert('$message');
        window.location.href='$href';
        </script>";
    }
?>
