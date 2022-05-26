
<!DOCTYPE html>
<html>
<head>
    <title>Recharge</title>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script   script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Resource/css/style.css">
    <script src="../Resource/js/main.js"></script>
<body>
    <?php
        require 'layout/header.php';
    ?>
     <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="../Controller/Recharge.php" method="POST">
                <div class="form-group">
                    <label for="">Account Number</label>
                    <input type="text" class="form-control" name="card" placeholder="Enter account number" required>
                </div>
                <div class="form-group">
                    <label for="">Expiration</label>
                    <input type="date" class="form-control" name="expiration" placeholder="Enter Expiration" required>
                </div>
                <div class="form-group">
                    <label for="">CVV</label>
                    <input type="text" class="form-control" name="cvv" placeholder="Enter CVV" required>
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" class="form-control" name="amount" placeholder="Enter amount" required>
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