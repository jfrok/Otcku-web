<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Otcku
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<style>
.form-control{
  margin: 15px;
}
button{
  margin: 15px;
}
</style>
 
    
<main class="contanier  m-auto " style="max-width:720px; margin-top:50px !important; text-align: center; ">
<div class="container">

<form method="POST" enctype="multipart/form-data">
Subject <input class="form-control" type="text" name="subject"/>
<br>
Message <input class="form-control" type="text" name="body"/>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">Upload a file</label>
  <input class="form-control" type="file" name="file" id="formFileDisabled" >
</div>

<button class="btn btn-outline-danger btn-block" type="submit" name="send">ارسال</button>
</form>

<a href="../uindex.php"> <button class="btn btn-outline-danger" type="submit" >رجوع الئ الورائ</button></a>
<?php 

if(isset($_POST['send'])){
    require_once './loginup/mail.php';
    $mail->setFrom('ootcku@gmail.com', 'ootcku');
    $mail->addAddress('ootcku@gmail.com');
  //  $mail->addCC('ootcku@gmail.com');
    $mail->Subject = $_POST["subject"];
    $mail->Body    =$_POST["body"];

   move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
  
   $mail->addAttachment($_FILES['file']['name']);
  //  $mail->addAttachment('files/' . $_POST['file']);    // Optional name
    $mail->send();
  unlink($_FILES['file']['name']);
   header("Location: ../uindex.php", true);

}

?>

</div>
<script src="../js/app.js"></script>
</body>
