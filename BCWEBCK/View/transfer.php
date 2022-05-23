
<!DOCTYPE html>
<html>
<head>
    <title>Transfer Money</title>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="../Controller/Transfer.php" method="POST">
                <div class="form-group">
                    <label for="">Account Transfer to</label>
                    <input type="text" class="form-control" name="account" placeholder="Enter username as account">
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" class="form-control" name="amount" placeholder="Enter amount">
                </div>
                <div class="form-group">
                   
                    <input type="submit" class="form-control" name="recharge" placeholder="Recharge">
                    <div class="back">
                        <a href="../View/home.php">Back</a>
                    </div>
  
                   

                </div>
                </form>
        </div>
    </div>
</body>
</html>