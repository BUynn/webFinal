<?php
    require 'config.php';
    ob_start();
    session_start();
    if(isset($_POST['recharge'])){
        //check card from __mycard
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM __mycard WHERE cardNumber = '$_POST[card]'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 ){
            //check cvv and expiration
            $row = mysqli_fetch_assoc($result);
            if($row['cvv'] == $_POST['cvv'] && $row['expiration'] == $_POST['expiration']){
                $amount = $_POST['amount'];
                //Only 2 withdrawals can be made per day.
                $sql = "SELECT * FROM __mycard WHERE username = '$username' AND times =2 AND date = CURDATE()";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    echo "<script>alert('You have already made 2 withdrawals today');window.location.href='../View/withdraw.php';</script>";
                } else if(mysqli_num_rows($result) <= 0){
                    //reset date = null and times = 0
                    $sql = "UPDATE __mycard SET date = NULL, times = 0 WHERE username = '$username'";
                }
                else {

                    //check money >= amount
                    $sql = "SELECT * FROM __money WHERE username = '$username'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        $money = $row['money'];
                        if($money >= $amount){
                            $money = $money - ($amount*0.05);
                            $sql = "UPDATE __money SET money = '$money' WHERE username = '$username'";
                            $result = mysqli_query($conn,$sql);
                            //insert into __historywithdraw
                            //get date now
                            $date = date('Y-m-d');
                            //get times form __mycard
                            $sql = "SELECT * FROM __mycard WHERE cardNumber = '$_POST[card]'";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($result);
                            $times = $row['times']+1;
                            $sql = "UPDATE __mycard SET money = '$amount', date = '$date', times = '$times' WHERE cardNumber = '$_POST[card]' and username = '$username'";
                                      
                            $result = mysqli_query($conn,$sql);
                            echo "<script>alert('Withdraw Successfully');window.location.href='../View/withdraw.php';</script>";
                        } else {
                            echo "<script>alert('Not enough money');window.location.href='../View/withdraw.php';</script>";
                        }
                    }
                    
                }

            }
            } else {
                echo "<script>alert('CVV or Expiration is incorrect');window.location.href='../View/recharge.php';</script>";
            }
        } else {
            echo "<script>alert('Card is not exist');window.location.href='../View/recharge.php';</script>";
        }
?>