<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php

// function ip()
// {
//     global $empresa;
//     if ($_SERVER) {
//         if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) and $_SERVER["HTTP_X_FORWARDED_FOR"]) {
//             $ipv = $_SERVER["HTTP_X_FORWARDED_FOR"];
//             $localiza = $ipv;
//         } else if (isset($_SERVER["HTTP_CLIENT_IP"]) and $_SERVER["HTTP_CLIENT_IP"]) {
//             $ipv = $_SERVER["HTTP_CLIENT_IP"];
//             $localiza = $ipv;
//         } else {
//             $ipv = $_SERVER["REMOTE_ADDR"];
//             $localiza = $ipv;
//         }
//     } else {
//         if (getenv('HTTP_X_FORWARDED_FOR')) {
//             $ipv = getenv('HTTP_X_FORWARDED_FOR');
//             $localiza = $ipv;
//         } else if (getenv('HTTP_CLIENT_IP')) {
//             $ipv = getenv('HTTP_CLIENT_IP');
//             $localiza = $ipv;
//         } else {
//             $ipv = getenv('REMOTE_ADDR');
//             $localiza = $ipv;
//         }
//     }
//     $arrV = explode(",", $localiza);
//     $v = $arrV[0];
//     return substr(htmlspecialchars($v, ENT_QUOTES), 0, 15);
// }

// //Get IP Address
// $log_ip = ip();


$name = isset($_POST['name']) ? $_POST['name'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$cpassword = isset($_POST['cpassword']) ? $_POST['cpassword'] : '';




if (isset($_POST['submit'])) {
    include '../db_conn.php';
    // $name = $_POST['name'];
    // $age = $_POST['age'];

    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $cpassword = $_POST['cpassword'];

    if (empty($name)) {
        echo '<div class="alert alert-danger" role="alert">
عفوا الاسم فاضي 
</div>';

        exit(" ");
    }
    if (empty($password)) {
        echo '<div class="alert alert-danger" role="alert">
عفوا لاتوجد كلمه سر  
</div>';

        exit(" ");
    }
    if (empty($email)) {
        echo '<div class="alert alert-danger" role="alert">
عفوا لايوجد بريد اكتروني  
</div>';
        exit(" ");
    }
    $email = $_POST['email'];

    $checkEmail = "SELECT * FROM users WHERE EMAIL = '$email'";
    $verify = mysqli_query($conn, $checkEmail);

    if ($verify->num_rows > 0) {
        echo '<div class="alert alert-danger" role="alert">
هذا حساب سابقا مستخدم
</div>';
        exit();
    } else {
        // Validate password
        if (empty($_POST["password"])) {
            $password_err = "Please enter a password.";
        } elseif (strlen($_POST["password"]) < 6) {
            echo '<div class="alert alert-danger" role="alert">
        Password must have atleast 6 characters.
        </div>';
            exit();
        }

        if ($password === $cpassword) {



            $password = sha1($_POST['password']);
            $securityCode = md5(date("h:i:s"));

            $addUser = "INSERT INTO 
            users(UR_NAME,AGE,PASSWORD,EMAIL,SECURITY_CODE,ROLE,ACTIVATED,AVATAR,UR_IP)
             VALUES('$name','$age','$password','$email','$securityCode','USER','0','AVTAR','182')";
            mysqli_query($conn, $addUser);

            echo '<div class="alert alert-success" role="alert">
      تم إنشاء حساب بنجاح 
    </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
    Password did not match.
    </div>';
        }
    }
}