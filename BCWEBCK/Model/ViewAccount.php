<?php
    require_once '../Controller/Config.php';
    ob_start();
    session_start();
    //view account
    if(isset($_POST['view'])){
        $username = $_POST['username'];
        $sql = "SELECT * FROM __account WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "Username: ".$row['username']."<br>";
                echo "Password: ".$row['password']."<br>";
            }
        }else{
            echo "Account not found";
        }
    }

?>