<style>
	button{
		color: red;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<title>اعاده تعين كلمه المرور </title>
</head>
<body>


		
<?php 

if(!isset($_GET['code'])){
echo '<div class="container">
<form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset</p>
    <div class="input-group">
        <input type="Password" placeholder="Password" name="password" value="" required>
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
}else if(isset($_GET['code']) && isset($_GET['password'])){
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

<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
<p class="login-register-text">Home Page<a href="register.php"> Register Here</a>.</p>
</form>';
}
?>

<?php 
if(isset($_POST['resetPassword']) ){
    require_once '../connectToDatabase.php';
    
    $checkEmail = $database->prepare("SELECT EMAIL,SECURITY_CODE FROM users WHERE EMAIL = :email");
    $checkEmail->bindParam("email",$_POST['email']);
    $checkEmail->execute();

    if( $checkEmail->rowCount() > 0){
        require_once 'mail.php';
        $user = $checkEmail->fetchObject();
        $mail->addAddress($_POST['email']);
        $mail->Subject = "إعادة تعين كلمة مرور";
    $mail->Body = '
        رابط لإعادة تعيين كلمة المرور 
        <br> ;
        ' . '<a href="https://ootcku.xyz/loginup/reset.php?email='.$_POST['email']. 
        '&code='.$user->SECURITY_CODE. '">https://ootcku.xyz/loginup/reset.php?email='.$_POST['email']. 
        '&code='.$user->SECURITY_CODE.'</a>';
        ;
        
        $mail->setFrom("ootcku@gmail.com", "Otcku");
        $mail->send();
        echo '
        <div class="alert alert-success mt-3"> 
     تم ارسال رابط لإعادة تعيين كلمة مرور إلى حسابك
     </div> 
     ';
    }else{
        echo '
        <div class="alert alert-warning mt-3">
        هذا بريد الكتروني غير مسجل لدينا
        </div> 
        ';
    }
}
?>



<?php 

if(isset($_POST['newPassword'])){
    require_once '../connectToDatabase.php';
    
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    if($password == $cpassword){

      $password = sha1($_POST['password']) ;
    
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Password did not match.
      </div>';
        exit ();
      }
   $updatePassword = $database->prepare("UPDATE users SET PASSWORD 
   = :password WHERE EMAIL = :email");
   $passwordUser = sha1($_POST['password']);
   $updatePassword->bindParam("password",$passwordUser);
   $updatePassword->bindParam("email",$_GET['email']);
   
   if($updatePassword->execute()){
    echo '
    <div class="alert alert-success mt-3">
    تم إعادة تعيين كلمة المرور بنجاح
    </div> 
    ';
   }else{
    echo '
    <div class="alert alert-danger mt-3">
    فشل إعادة تعيين كلمة المرور 
    </div>
    ';
   }
}

?>

</main>
</body>
</html>