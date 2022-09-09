<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "SUPER-ADMIN"){
echo "";


}else{
    header("location:../loginup/login.php",true); 
    die("");
}
}else{
    header("location:../loginup/login.php",true); 
    die(""); 
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:../loginup/login.php",true); 
    }
?> 

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="../images/oot.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="../css/styled.css">
	
	 <!-- BOX ICONS -->
	 <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>

form{
    position: relative;
    margin-top: 85px;
}

</style>
<?php require 'dash.php'; ?>
	<!-- end sidebar -->


<form method="POST">


<main class="container mt-3" style="text-align: right!important;">

<div class="font-weight-bold">اسمك</div>
<input class="form-control" type="text" name="manger" <?php echo 'value="'.$_SESSION['user']->NAME.'"'; ?>/>

<div class="font-weight-bold">فيلم</div>
<input class="form-control" type="text" name="movie" />

<div class="font-weight-bold">مسلسل</div>
<input class="form-control" type="text" name="series" />


<div class="font-weight-bold">انمي</div>
<input class="form-control" type="text" name="anime" /><br>

<input class="btn btn-danger" type="submit" name="upload" value="send">

</form>

<?php

 
require_once '../connectToDatabase.php';




if(isset($_POST['upload'])){
    $checkVedioUrl = $database->prepare("SELECT * FROM sugg WHERE movie = :movie");
   $movie = $_POST['movie'];
    $checkVedioUrl->bindParam("movie",$name);
    if($checkVedioUrl->rowCount()>0){
        
    }else{
        $movie = $_POST['movie'];
        $series = $_POST['series'];
        $anime = $_POST['anime'];
        $manger = $_POST['manger'];
       

       $addItem = $database->prepare("INSERT INTO sugg(movie,series,anime,manger) VALUES(:movie,:series,:anime,:manger)");
       $addItem->bindParam("movie",$movie);
       $addItem->bindParam("series",$series);
       $addItem->bindParam("anime",$anime); 
       $addItem->bindParam("manger",$manger);
	   
       
    if($addItem->execute()){
        echo '<div class="alert alert-success" role="alert">
        تم اضافه الاوامر بنجاح 
      </div>';
	  
    }else{
        echo '<div class="alert alert-success" role="alert">
        حدث خطا غير متوقع
      </div>';
    }
       
    }

}

?>
<!-- import script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../js/index.js"></script>
	<!-- end import script -->
</main>
</body>
</html>



