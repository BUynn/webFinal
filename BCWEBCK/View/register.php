<?php
    include('../Controller/CheckRegister.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="../Controller/CheckRegister.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="register" value="register">
        <a href="../View/login.php">Login</a>
    </form>
</body>
</html>