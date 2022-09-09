<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'auth.php'

?>
<style>
button {
    color: red;
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

    <title>Login </title>
</head>

<body>

    <?php
    // require_once '../db_conn.php';
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

    if (isset($_POST['newPassword'])) {
        require_once '../connectToDatabase.php';

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
        $updatePassword = $database->prepare("UPDATE users SET PASSWORD 
           = :password WHERE EMAIL = :email");
        $passwordUser = sha1($_POST['password']);
        $updatePassword->bindParam("password", $passwordUser);
        $updatePassword->bindParam("email", $_GET['email']);

        if ($updatePassword->execute()) {
            echo '
            <div class="alert alert-success mt-3">
            تم إعادة تعيين كلمة المرور بنجاح
            </div> 
            ';
            // Initialize the session
            session_start();

            // Unset all of the session variables
            $_SESSION = array();

            // Destroy the session.
            session_destroy();

            // Redirect to login page
            header("location: ../loginup/login");
            exit;
        } else {
            echo '
            <div class="alert alert-danger mt-3">
            فشل إعادة تعيين كلمة المرور 
            </div>
            ';
        }
    }
    ?>

    </form>
    </div>
</body>

</html>