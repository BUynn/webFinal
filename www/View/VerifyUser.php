
<!DOCTYPE html>
<html>
<head>
    <title>Enter Username</title>
</head>
<body>
    <h1>Enter Username</h1>
    <form action="../Controller/CheckUser.php" method="post">
        <label for="email">email</label>
        <input type="text" name="email" id="email" required>
        <input type="submit" name="verified" value="verified">
        <button type="button" onclick="window.location.href='../View/login.php'">Cancel</button>
    </form>
</body>
</html>