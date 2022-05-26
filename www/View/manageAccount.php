<?php 
    require("../Model/ManageAccount.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage account</title>
    <style>
        table,tr, th,thead,tbody, td {
        border:1px solid black;
    }
</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="back">
        <a href="../View/home.php">Back</a>
    </div>
    <h2>Accounts wait for actived</h2>
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
                    <td><input type="submit" name="deny" value="Deny" class="profile-button"></td>
                </form>
            </tr>
            <?php endforeach; ?>    
       </tbody>
    </table>
    <h2>Accounts have been actived</h2>
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
                    <td><input type="submit" name="view" value="View" class="profile-button"></td>
                </form>
            <?php endforeach; ?>    
       </tbody>
    </table>

  
    <h2>Accounts have been blocked</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result3 as $account): ?>
                <form action="../Model/ActiveAccount.php?username=<?php echo $account['username']?>" method="post">
                    <td><?php echo $account['username']; ?></td>
                    <td><?php echo $account['email']; ?></td>
                    <td>Blocked</td>
                    <td><input type="submit" name="view" value="view" class="profile-button"></td>
                    <td><input type="submit" name="unblock" value="Unblock" class="profile-button"></td>
                </form>
            <?php endforeach; ?>    
       </tbody>
    </table>


    <h2>Accounts have been disabled</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result4 as $account): ?>
                <form action="../View/anAccountDetail.php?username=<?php echo $account['username']?>" method="post">
                    <td><?php echo $account['username']; ?></td>
                    <td><?php echo $account['email']; ?></td>
                    <td>Disabled</td>
                    <td><input type="submit" name="view" value="view" class="profile-button"></td>
                </form>
            <?php endforeach; ?>    
       </tbody>
    </table>
</body>
</html>