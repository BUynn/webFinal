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
    <form action="../Controller/CheckRegister.php" enctype="multipart/form-data" method="post">
        <label for="phone">Phone number</label>
        <input type="text" name="phone" id="phone">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="dob">Date of birth</label>
        <input type="date" name="dob" id="dob">
        <label for="image_front_id">Image front Identity Card</label>
        <input type="file" name="image_front_id" id="image_front_id">
        <label for="image_back_id">Image back Identity Card</label>
        <input type="file" name="image_back_id" id="image_back_id">
        <input type="submit" name="register" value="register">
        <a href="../View/login.php">Login</a>
    </form>
</body>
</html>