<?php
    ob_start();
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form action="../Controller/__ChangePWD.php" method="post">
        
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password" required>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <input type="submit" name="change_password" value="change_password">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>
</body>
</html>