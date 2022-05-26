<?php 
    require("../Model/TransactionHistory.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transaction Histoy</title>
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
    <h2>Transaction Histoy</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Transaction Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Excution Type</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
            <?php foreach($result as $account): ?>
                <form action="" method="post">
                    <td><?php echo $account['id']; ?></td>
                    <td><?php echo $account['transactiontype']; ?></td>
                    <td><?php echo $account['amount']; ?></td>
                    <td><?php echo $account['executiontime']; ?></td>
                    <td><?php echo $status; ?></td>
                    <td><input type="submit" name="view" value="view" class="profile-button"></td>
                </form>
            <?php endforeach; ?>    
       </tbody>
    </table>
</body>
</html>