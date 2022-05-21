<!DOCTYPE html>
<html>
<head>
    <title>Enter OTP</title>
</head>
<body>
    <h1>Enter OTP</h1>
    <form action="../Controller/CheckOTP.php" method="post">
        <label for="otp">OTP</label>
        <input type="text" name="otp" id="otp">
        <input type="submit" name="check_otp" value="check_otp">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>
</body>
</html>


