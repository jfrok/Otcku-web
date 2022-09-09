<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
$movie = $database->prepare("SELECT * FROM movies_info WHERE ID = :id");
$movie->bindParam('id', $_SESSION['userId']);
$movie->execute();
$movie = $movie->fetchObject();


//<div class="p-3 shadow "> الحاله : </div>
//<input  class="form-control mb-1" type="date" name="age" value="'.$user->AGE.'" required />
 
echo '<form method="POST">
<div class="p-3 shadow "> name :  </div>
<input class="form-control mb-1" type="text" name="name" value="'.$movie->NAME.'"  />
<div class="p-3 shadow "> date :  </div>
<input class="form-control mb-1" type="text" name="date" value="'.$movie->DATE.'"  />
<div class="p-3 shadow "> rate :  </div>
<input class="form-control mb-1" type="text" name="rate" value="'.$movie->RATE.'" />
<div class="p-3 shadow "> imageurl :  </div>
<input class="form-control mb-1" type="text" name="imageurl" value="'.$movie->IMAGEURL.'"  />
<div class="p-3 shadow "> videourl :  </div>
<input class="form-control mb-1" type="text" name="videourl" value="'.$movie->VIDEOURL.'"  />
<div class="p-3 shadow "> forshared :  </div>
<input class="form-control mb-1" type="text" name="forshared" value="'.$movie->FORSHARED.'"  />
<div class="p-3 shadow "> doodstream :  </div>
<input class="form-control mb-1" type="text" name="doodstream" value="'.$movie->DOODSTREAM.'" />


';

echo '
<button class="w-100 btn btn-dark mt-1 mb-3" type="submit" name="update" value="'.$movie->ID.'">تحديث</button>
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
    $updateUser = $database->prepare("UPDATE movies_info SET NAME = :name , DATE = :date , IMAGEURL = :imageurl , VIDEOURL = :videourl , FORSHARED = :forshared , DOODSTREAM = :doodstream , RATE = :rate  WHERE ID = :id");
    $updateUser->bindParam("name",$_POST['name']);
    $updateUser->bindParam("date",$_POST['date']);
    $updateUser->bindParam("rate",$_POST['rate']);
    $updateUser->bindParam("videourl",$_POST['videourl']);
    $updateUser->bindParam("forshared",$_POST['forshared']);
    $updateUser->bindParam("doodstream",$_POST['doodstream']);
    $updateUser->bindParam("imageurl",$_POST['imageurl']);
    $updateUser->bindParam("id",$_POST['update']);
    $updateUser->execute();
    header("location:editM.php");
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