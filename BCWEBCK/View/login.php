<?php include('../Controller/CheckLogin.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

</head>
<body>
    <h1>Login</h1>
    <form action="../Controller/CheckLogin.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>