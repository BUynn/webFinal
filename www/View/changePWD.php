<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script   script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Resource/css/header.css">
</head>
<body>
    <?php
        require 'layout/header.php';
    ?>
    <br><br><br><br><br><br><br><br>
    <h1>Change Password</h1>
    <form action="../Controller/ChangePWD.php" method="post">
        <label for="old_password">Old Password</label>
        <input type="password" name="old_password" id="old_password">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="changePassword" value="change_password">
        <button type="button" onclick="window.location.href='../View/home.php'">Cancel</button>
    </form>
</body>
</html>

