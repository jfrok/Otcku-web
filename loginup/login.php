<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']->ROLE === "USER") {

        header("location:../inc/index.php", true);
    }
    if ($_SESSION['user']->ROLE === "SUPER-ADMIN") {

        header("location:../super-admin/index.php", true);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Location" content="https://ootcku.xyz/">

    <!--<meta http-equiv="Refresh" content="2; url=../inc/index.php">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>Login </title>
</head>

<body>
    <style>
    button {
        color: red;
    }
    </style>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required />
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required />
            </div>
            <!-- Checkbox -->
            <!--  <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox"/>
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>-->
            <!-- End Checkbox -->
            <div class="input-group">
                <button name="login" class="btn">Login</button>
            </div>
            <?php
            if (isset($_POST['login'])) {
                require_once '../db_conn.php';

                $email = $_POST['email'];
                $lpassword = sha1($_POST['password']);

                $login = "SELECT * FROM users WHERE EMAIL='$email' AND PASSWORD ='$lpassword'";
                $sqlResualt = $conn->query($login);
                $verfiy = $sqlResualt->num_rows;
                if ($verfiy === 1) {
                    $user = $sqlResualt->fetch_object();

                    if ($user->ACTIVATED === "1") {


                        $_SESSION['user'] = $user;

                        if ($user->ROLE === "USER") {
                            echo "<script language='javascript'>";
                            //echo 'alert("Your alert msg");';
                            echo 'window.location.replace("../inc/index.php");';
                            echo "</script>";
                            //exit( header("location:../inc/index.php",true));

                        } else if ($user->ROLE === "ADMIN") {
                            echo "<script language='javascript'>";
                            //echo 'alert("Hello again");';
                            echo 'window.location.replace("../admin/index.php");';
                            echo "</script>";
                            //  exit(  header("location:../admin/index.php",true));
                        } else if ($user->ROLE === "SUPER-ADMIN") {
                            echo "<script language='javascript'>";
                            //echo 'alert("Your alert msg");';
                            echo 'window.location.replace("../super-admin/index.php");';
                            echo "</script>";
                            //   ( header("location:../super-admin/index.php",true));
                        }
                        //     if($user->UR_IP != $_SESSION['user']->UR_IP){
                        //          require_once "mail.php";
                        // $mail->addAddress($email);
                        // $mail->Subject = "Securty";
                        // $mail->Body = '<h1> hh bb في b</h1>'
                        //     . "<div> hg b من حساب" . "<div>" .
                        //     "<a href=''>check</a>";
                        // $mail->setFrom("soppurtootcku@gmail.com", "OTCKU");
                        // $mail->send();
                        //     }
                    } else {
                        echo '
    <div class="alert alert-warning"> 
    يرجى تفعيل حسابك في البداية , لقد ارسلنا 
    رمز تحقق من حسابك إلى بريد الكتروني خاص بك
    </div>
    ';
                    }
                } else {
                    echo '
 <div class="alert alert-danger">
 كلمة مرور او بريد الكتروني غير صحيح 
 </div>
 ';
                }
            }
            ?>
            <p class="login-register-text">Home Page<a href="../index.php">
                    <--- </a>.</p>
            <p class="login-register-text">Don't have an account? <a href="register">Register Here</a>.</p>
            <p class="login-register-text">Forget password? <a href="reset">Reset Here</a>.</p>

        </form>
    </div>
</body>

</html>