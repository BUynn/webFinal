
<!DOCTYPE html>
<html>
<head>
    <title>Recharge</title>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="../Controller/Recharge.php" method="POST">
                <div class="form-group">
                    <label for="">Account Number</label>
                    <input type="text" class="form-control" id="account_number" placeholder="Enter account number">
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                </div>
                <div class="form-group">
                   
                    <input type="submit" class="form-control" id="recharge" placeholder="Recharge">
                </div>
                </form>
        </div>
    </div>
</body>
</html>