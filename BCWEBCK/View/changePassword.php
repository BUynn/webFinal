
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form action="../Controller/ChangePassword.php" method="post">
        
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="change_password" value="change_password">
        <input type="submit" name="change" value="change">
    </form>
</body>
</html>