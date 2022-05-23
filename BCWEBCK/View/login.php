<?php include('../Controller/CheckLogin.php'); 
 include('../Controller/CheckRegister.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign in and Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Resource/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../Resource/js/login.js"></script>
</head>
<body>
<section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg" alt="" /></div>
        <div class="formBx">
          <form action="../Controller/CheckLogin.php" method="post">
            <h2>Sign In</h2>
            <input type="text" name="username" id="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <input  type="submit" name="login" value="login"/>
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="../Controller/CheckRegister.php" enctype="multipart/form-data" method="post">
          
            <input type="text" name="phone" placeholder="Phone" />
         
            <input type="email" name="email" placeholder="Email Address" />
           
            <input type="date" name="dob" placeholder="Date of birth" />
            <label>Image front Identity Card</label>
            <input type="file" name="image_front_id" placeholder="Image front Identity Card" />
            <label>Image back Identity Card</label>
            <input type="file" name="image_back_id" placeholder="Image back Identity Card" />
            <input type="submit" name="register" value="Register"/>
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg" alt="" /></div>
      </div>
    </div>
  </section>

</body>
</html>
