
<!DOCTYPE html>
<html>
<head>
    <title>Change First Password</title>
</head>
<body>
    <h1>Change First Password</h1>
    <form action="../Controller/ChangeFirstPassword.php" method="post">
        
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="change_password" value="change_password">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>
</body>
</html>