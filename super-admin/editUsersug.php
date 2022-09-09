<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
<a href="index.php" class="logo">
     <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
     </a>
  <a class="navbar-brand" href="#">
    
  </a>

 

</nav>

<main class="container m-auto" style="max-width: 720px;">

<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "ADMIN"){
    
    require_once '../connectToDatabase.php';
if(isset( $_SESSION['userId'])){
$sugg = $database->prepare("SELECT * FROM sugg WHERE ID = :id");
$sugg->bindParam('id', $_SESSION['userId']);
$sugg->execute();
$sugg = $sugg->fetchObject();

//<div class="p-3 shadow "> الحاله : </div>
//<input  class="form-control mb-1" type="date" name="age" value="'.$user->AGE.'" required />
 
echo '<form method="POST">
<div class="p-3 shadow "> Movie :  </div>
<input class="form-control mb-1" type="text" name="movie" value="'.$sugg->movie.'"  />
<div class="p-3 shadow "> Series :  </div>
<input class="form-control mb-1" type="text" name="series" value="'.$sugg->series.'"  />
<div class="p-3 shadow "> Anime :  </div>
<input class="form-control mb-1" type="text" name="anime" value="'.$sugg->anime.'" />

<div class="p-3 shadow "> Manger :  </div>
<input class="form-control mb-1" type="text" name="manger" value="'.$sugg->manger.'" />

';

//echo '<select class="form-control mb-3" name="activated" > ';
//if($user->ACTIVATED ==="1"){
   // echo ' <option value="' .$sugg->ACTIVATED.' ">حساب مفعل</option>';
//}else{
    //echo ' <option value="' .$sugg->ACTIVATED.' ">حساب غير مفعل</option>';
//}
//echo '
//<option value="0">الغاء تفعيل</option>
//<option value="1">تفعيل</option>
//</select>
echo '
<button class="w-100 btn btn-dark mt-1 mb-3" type="submit" name="update" value="'.$sugg->ID.'">تحديث</button>
<a class="w-100 btn btn-light mt-1 mb-3" href="index.php"> عودة لصفحة الرئيسية</a>
</form>';
}

if(isset($_POST['update'])){
   // If user has permission (edit users) then :
   //     if the EDITED USER is an admin :
   //         show message "انقلع لا تعدل على ادمنية يا حريمة"
   //     end
   //     do the edit
   // end
   // else 
   //     show message "انثلع ما تقدر تعدل يا الزربة"
   // end
    $updateUser = $database->prepare("UPDATE sugg SET movie = :movie , series= :series , anime = :anime , manger = :manger WHERE ID = :id");
    $updateUser->bindParam("movie",$_POST['movie']);
    $updateUser->bindParam("series",$_POST['series']);
    $updateUser->bindParam("anime",$_POST['anime']);
    $updateUser->bindParam("manger",$_POST['manger']);
    //$updateUser->bindParam("activated",$_POST['activated']);
    $updateUser->bindParam("id",$_POST['update']);
    $updateUser->execute();
    header("location:editUsersug.php");
}

    echo "<form> <button class='btn btn-danger w-100' type='submit' name='logout'>تسجيل خروج</button></form>";
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
</main>
</body>
</html>