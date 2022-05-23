<?php
    require 'config.php';
    ob_start();
    session_start();
    if(isset($_POST['recharge'])){
        //add recharge to database __money
        $username = $_SESSION['username'];
        //check card from __card
        $sql = "SELECT * FROM __card WHERE cardNumber = '$_POST[card]'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0 ){
            //check card == 222222
            $row = mysqli_fetch_assoc($result);
            if($row['cardnumber'] == 222222 && (int)$_POST['amount'] > 1000000){
                //check money >= 100
                echo "<script>alert('can only be loaded up to 1 million vnd/time');window.location.href='../View/recharge.php';</script>";
            } else if($row['cardnumber'] == 222222 && (int)$_POST['amount'] < 1000000) {
                $amount = $_POST['amount'];
                $sql = "SELECT * FROM __money WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $money = $row['money'];
                    $money = $money + $amount;
                    $sql = "UPDATE __money SET money = '$money' WHERE username = '$username'";
                    $result = mysqli_query($conn,$sql);
                    echo "<script>alert('Recharge Successfully');window.location.href='../View/home.php';</script>";
                }
                //insert into __historyrecharge
                $sql = "INSERT INTO __historyrecharge(username,cardnumber,amount,date)
                VALUES('$username','$row[cardnumber]','$amount',CURDATE())";
                $result = mysqli_query($conn,$sql);
               

            } else if($row['cardnumber'] == 333333 ){               
                //check money >= 10
                $amount = $_POST['amount'];
                $sql = "SELECT * FROM __money WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $money = $row['money'];
                    $money = $money + $amount;
                    $sql = "UPDATE __money SET money = '$money' WHERE username = '$username'";
                    $result = mysqli_query($conn,$sql);
                }
                echo "<script>alert('Card is out of money');window.location.href='../View/recharge.php';</script>";
            } else {
                $amount = $_POST['amount'];
                $sql = "SELECT * FROM __money WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $money = $row['money'];
                    $money = $money + $amount;
                    $sql = "UPDATE __money SET money = '$money' WHERE username = '$username'";
                    $result = mysqli_query($conn,$sql);
                    echo "<script>alert('Recharge Successfully');window.location.href='../View/home.php';</script>";
                }
                $sql = "INSERT INTO __historyrecharge(username,cardnumber,amount,date)
                VALUES('$username','$row[cardnumber]','$amount',CURDATE())";
                $result = mysqli_query($conn,$sql);
            }
            //get day time now(YYYY-MM-DD)
           
            $sql = "INSERT INTO __historyrecharge(username,cardnumber,amount,date)
            VALUES('$username','$row[cardnumber]','$amount',)";
            $result = mysqli_query($conn,$sql);
            //get cvv and expiration from table __card
            $getcvv = "SELECT * FROM __card WHERE cardNumber = '$_POST[card]'";
            $result = mysqli_query($conn,$getcvv);
            $rowS = mysqli_fetch_assoc($result);
            $sql = "INSERT INTO __mycard(username,cardnumber,cvv,expiration)
            VALUES('$username','$rowS[cardnumber]','$rowS[cvv]','$rowS[expiration]')";
            $result = mysqli_query($conn,$sql);
        } else {
            echo "<script>alert('This card is not supported');window.location.href='../View/recharge.php';</script>";
        }
        
    }

?>