
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="../View/login.php">Logout</a>
    <form action="../Model/ViewAccount.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="submit" name="view" value="view">
    </form>
    <?php
        require_once '../Model/ViewAccount.php';
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