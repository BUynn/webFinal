<?php
    require('../Controller/Config.php');
    if(isset($_POST['active'])){
        //update isActived = 1
        $username = $_GET['username'];
        $sql = "UPDATE __account SET isActived = 1 WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location: ../View/manageAccount.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

?>