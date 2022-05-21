<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Resource/css/dangky.css">
</head>
<body>
    <div class="taskbar1">
        <h1>E-WALLET</h1>
    </div>


    <div class="container">
        <form action="/action_page.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="fullname" required>
                <div class="invalid-feedback">Please enter your full name.</div>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" required>
                <div class="invalid-feedback">Please enter your birthday.</div>
            </div>

            <div class="form-group">
                <label for="address">Your Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required>
                <div class="invalid-feedback">Please enter your address.</div>
            </div>

            <div class="form-group">
                <label for="phone">Your Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" required>
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                <div class="invalid-feedback">Please enter your email.</div>
            </div>

            <p>Upload a photo of your identity card on the front:</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Choose file</label>
                <div class="invalid-feedback">Please upload a photo of your identity card on the front.</div>
            </div>
            <!-- <p>Default file:</p>
            <input type="file" id="myFile" name="filename2"> -->

            <p style="padding-top: 10px">Upload a photo of your identity card on the back:</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Choose file</label>
                <div class="invalid-feedback">Please upload a photo of your identity card on the back.</div>
            </div>
            <!-- <p>Default file:</p>
            <input type="file" id="myFile" name="filename2"> -->

            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="check" required> I agree to the terms of registration
                <div class="invalid-feedback">Please click the confirm.</div>
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    <div class="dk">
        <p><a href="trangchu.html">Return</a></p>
    </div>

    <script>
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <script>
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>
</body>
</html>