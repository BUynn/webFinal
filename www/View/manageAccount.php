<?php 
    require("../Model/ManageAccount.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View account</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="back">
        <a href="../View/home.php">Back</a>
    </div>
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result as $account): ?>
                <form action="../View/anAccountDetail.php?username=<?php echo $account['username']?>" method="post">
                    <td><?php echo $account['username']; ?></td>
                    <td><?php echo $account['email']; ?></td>
                    <td>Activated</td>
                    <td><input type="submit" name="view" value="view" class="profile-button"></td>
                </form>
            <?php endforeach; ?>    
       </tbody>
    </table>
<!-- 
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result1 as $account): ?>
            <tr>
                <form action="../View/anAccountDetail.php?username=<?php echo $account['username']?>" method="post">
                    <td><?php echo $account['username']; ?></td>
                    <td><?php echo $account['email']; ?></td>
                    <td>Waiting for activation</td>
                    <td><input type="submit" name="view" value="view" class="profile-button"></td>
                </form>
            </tr>
            <?php endforeach; ?>    
       </tbody>
    </table> -->


    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result2 as $account): ?>
            <tr>
                <form action="../Model/ActiveAccount.php?username=<?php echo $account['username']?>" method="post">
                    <td><?php echo $account['username']; ?></td>
                    <td><?php echo $account['email']; ?></td>
                    <td>Waiting for activation</td>
                    <td><input type="submit" name="active" value="Active" class="profile-button"></td>
                </form>
            </tr>
            <?php endforeach; ?>    
       </tbody>
    </table>

</body>
</html>