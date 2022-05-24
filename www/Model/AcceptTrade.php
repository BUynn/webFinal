<?php
    require('../Controller/Config.php');
    //$username = $_GET['username'];
    // $sql = "SELECT * FROM __accepwithdraw WHERE isAccepted = 0";
    // $result = mysqli_query($conn,$sql);
    // $sql1 = "SELECT * FROM __accepwithdraw WHERE isAccepted = 2";
    // $result1 = mysqli_query($conn,$sql1);
    // $sql2 = "SELECT * FROM __accepwithdraw WHERE isAccepted = 1";
    // $result2 = mysqli_query($conn,$sql2);
    // if(isset($_POST['accept'])){
    //     $sql = "UPDATE __accepwithdraw SET isAccepted = 1";
    //     $result = mysqli_query($conn,$sql);
    //     $money = $_GET['money'];
    //     $username = $_GET['username'];
    //     //select money from __money 
    //     $sql = "SELECT * FROM __money WHERE username = '$username'";
    //     $result = mysqli_query($conn,$sql);
    //     if(mysqli_num_rows($result) > 0){
    //         $row = mysqli_fetch_assoc($result);
    //         $money = $row['money'];
    //         $temp =$_GET['money'];
    //          if($money < $temp ){
    //             $sql = "UPDATE __accepwithdraw SET isAccepted = 2";
    //             $result = mysqli_query($conn,$sql);
    //             echo "<script>alert('Not enough money');window.location.href='../View/acceptTrade.php';</script>";
    //         }
    //         else{
    //             $money = $_GET['money'];
    //             $temp = $money+($money*0.05);
    //             $sql = "UPDATE __money SET money = money - '$money' WHERE username = '$username'";
    //             $result = mysqli_query($conn,$sql);
    //             //update __mycard
    //             $sql = "UPDATE __mycard SET money = money + '$money' WHERE username = '$username'";
    //             $result = mysqli_query($conn,$sql);
                
    //             echo "<script>alert('Success');window.location.href='../View/acceptTrade.php';</script>";
    //         }
           
    //     }
    //     //echo "<script>alert('$temp');window.location.href='../View/acceptTrade.php';</script>";
       
    // }

    // if(isset($_POST['deny'])){
    //     $sql = "UPDATE __accepwithdraw SET isAccepted = 2";
    //     $result = mysqli_query($conn,$sql);
    // }
    echo $_POSTơ

?>