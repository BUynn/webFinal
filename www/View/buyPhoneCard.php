<!DOCTYPE html>
<html>
    <title>Buy Phone Card</title>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script   script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Resource/css/header.css">
    <script src="../Resource/js/header.js"></script>
<body>
    <?php
        require 'layout/header.php';
    ?>
     <br><br><br><br><br><br><br><br>
    <form action="../Controller/BuyPhoneCard.php" method="POST">
        <label for="card">Choose a card</label>
        <select name="card" id="card">
            <option value="viettel">Viettel</option>
            <option value="mobiphone">Mobiphone</option>
            <option value="vinaphone">Vinaphone</option>
        </select>
        <br><br>
        <label for="valuation">Valuation</label>
        <select name="valuation" id="valuation">
            <option value="10000">10.000đ</option>
            <option value="20000">20.000đ</option>
            <option value="100000">100.000đ</option>
            <option value="200000">200.000đ</option>
        </select>
        <br><br>
        <label for="amount">Amount</label>
        <select name="amount" id="amount">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br>
        <input type="submit" name="buycard" value="Submit">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>


    <!-- <table>
        <tr>
            <th>Card</th>
            <th>Valuation</th>
            <th>Amount</th>
            <th>Total</th>
        </tr>

    </table> -->
</body>
</html>
