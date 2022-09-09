<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Register</title>
    <script>
    $(document).ready(function() {
        $("form").submit(function(event) {
            event.preventDefault();
            var name = $("#name").val();
            var age = $("#age").val();

            var email = $("#email").val();
            var password = $("#password").val();
            var cpassword = $("#cpassword").val();

            //var gender = $("#mail-gender").val();
            //var message = $("#mail-message").val();
            var submit = $("#submit").val();
            $("#form-message").load("insert-script.php", {
                name: name,
                age: age,
                email: email,
                password: password,
                cpassword: cpassword,
                submit: submit
            });
        });
    });
    </script>
</head>


<body>




    <div class="container">
        <form method="POST" id="register_form" action="insert-script.php" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="name" name="name" id="name" value="">
            </div>
            <div class="input-group">
                <input type="date" placeholder="age" name="age" id="age" value="">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" id="email" value="">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password" value="">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" value="">
            </div>
            <div class="input-group">
                <button type="submit" name="submit" id="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Home Page<a href="../index.php">
                    <--- </a>
            </p>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
            <div id="form-message"></div>
        </form>


</body>

</html>