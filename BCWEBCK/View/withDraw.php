
<!DOCTYPE html>
<html>
<head>
    <title>Withdraw</title>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="../Controller/Withdraw.php" method="POST">
                <div class="form-group">
                    <label for="">Card Number</label>
                    <input type="text" class="form-control" name="card" placeholder="Enter card number">
                </div>
                <div class="form-group">
                    <label for="">Expiration</label>
                    <input type="date" class="form-control" name="expiration" placeholder="Enter Expiration">
                </div>
                <div class="form-group">
                    <label for="">CVV</label>
                    <input type="text" class="form-control" name="cvv" placeholder="Enter cvv">
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