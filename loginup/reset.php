<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<style>
button {
    color: red;
}

.btn {
    background: #535252;
    color: white;
    padding: 10px 15px;
    text-align: center;
    border: none;
}

.btn:hover {
    color: #555454;
    background: white;
    padding: 8px 13px;
    border: 2px solid #504d4d;
}
</style>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>اعاده تعين كلمه المرور </title>
</head>

<body>



    <?php
    require_once '../connectToDatabase.php';
    require_once '../db_conn.php';

    if (!isset($_GET['code'])) {
        echo '<div class="container">
<form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset</p>
    <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="" required>
    </div>
    <div class="input-group">
<button class="btn" type="submit" name="resetPassword" >
Reset Password
</button> 
</div>
<p class="login-register-text">Home Page<a href="../index.php"> <---</a>.</p>
<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
<p class="login-register-text">Home Page<a href="register.php"> Register Here</a>.</p>
</form > ';
    } else if (isset($_GET['code']) && isset($_GET['email'])) {
        echo '
<div class="container">
<form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">new password

    </p>
    <div class="input-group">
        <input type="password" placeholder="New password" name="password"  required>
    </div>
    <div class="input-group">
    <input type="password" placeholder="Confirm Password" name="cpassword"  required>
</div>
    <div class="input-group">
<button class="btn" type="submit" name="newPassword" >
Update
</button> 
</div>

<p class="login-register-text">Have an account? <a href="login">Login Here</a>.</p>
<p class="login-register-text">Home Page<a href="register"> Register Here</a>.</p>
</form>';
    }
    ?>


    <?php
    if (isset($_POST['resetPassword'])) {


        $userEmail =  $_POST['email'];

        $checkEmail = "SELECT EMAIL,SECURITY_CODE FROM users WHERE EMAIL = '$userEmail'";

        $checkResult = $conn->query($checkEmail);
        $verify = $checkResult->num_rows;
        if ($verify > 0) {
            require_once 'mail.php';
            $user = $checkResult->fetch_object();
            $mail->addAddress($_POST['email']);
            $mail->Subject = "Reset Password";
            $mail->Body = ' 
        رابط لإعادة تعيين كلمة المرور 
        <br> 
        http://otcku.great-site.net/loginup/reset?email=' . $_POST['email'] .
                '&code=' . $user->SECURITY_CODE . '
        <br>
        <br>
        ' . '<a href="http://otcku.great-site.net/loginup/reset?email=' . $_POST['email'] .
                '&code=' . $user->SECURITY_CODE . '">Reset Your Passwoe</a>';

            $mail->setFrom("jfroosama10@gmail.com", "Rest");
            $mail->send();
            echo '
        <div class="alert alert-success mt-3"> 
     تم ارسال رابط لإعادة تعيين كلمة مرور إلى حسابك
     </div> 
     ';
        } else {
            echo '
        <div class="alert alert-warning mt-3">
        هذا بريد الكتروني غير مسجل لدينا
        </div> 
        ';
        }
    }
    ?>


    <?php

    if (isset($_POST['newPassword'])) {

        $cpassword = $_POST['cpassword'];
        $password = $_POST['password'];
        if ($password == $cpassword) {

            $password = sha1($_POST['password']);
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Password did not match.
      </div>';
            exit();
        }
        $userEmail =  $_GET['email'];
        $user = "SELECT EMAIL,SECURITY_CODE FROM users WHERE EMAIL = '$userEmail'";

        $checkUser = $conn->query($user);
        // $verify = $checkUser->num_rows;

        $user = $checkUser->fetch_object();

        if ($_GET['code'] !== $user->SECURITY_CODE) {
            echo '<div class="alert alert-danger" role="alert">
            هذا الرابط لم يعد صالحا للأستخدام
          </div>';

            echo '<a class="btn btn-danger" href="../loginup/login.php">تسجيل دخول</a>';
        } else {



            $updatePassword = $database->prepare("UPDATE users SET PASSWORD 
        = :password,SECURITY_CODE = :NEWSECURITY_CODE WHERE EMAIL = :email and SECURITY_CODE = :SECURITY_CODE");
            $passwordUser = sha1($_POST['password']);
            $updatePassword->bindParam("password", $passwordUser);
            $updatePassword->bindParam("email", $_GET['email']);
            $securityCode = md5(date("h:i:s"));
            $updatePassword->bindParam("NEWSECURITY_CODE", $securityCode);
            $updatePassword->bindParam("SECURITY_CODE", $_GET['code']);

            if ($updatePassword->execute()) {
                echo '
    <div class="alert alert-success mt-3">
    تم إعادة تعيين كلمة المرور بنجاح
    </div> 
    ';
            } else {
                echo '<a class="btn btn-danger" href="../loginup/login.php">تسجيل دخول</a>';

                echo '
    <div class="alert alert-danger mt-3">
    فشل إعادة تعيين كلمة المرور 
    </div>

    ';
            }
        }
    }


    ?>

    </main>
</body>

</html>