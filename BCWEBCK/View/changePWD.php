<?php
    ob_start();
    session_start();
    //session
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form action="../Controller/ChangePWD.php" method="post">
        <label for="old_password">Old Password</label>
        <input type="password" name="old_password" id="old_password">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="change_password" value="change_password">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>
</body>
</html>

