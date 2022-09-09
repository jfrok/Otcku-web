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
$ep = $database->prepare("SELECT * FROM episode_info WHERE ID = :id");
$ep->bindParam('id', $_SESSION['userId']);
$ep->execute();
$ep = $ep->fetchObject();


echo '<form method="POST">
<div class="p-3 shadow "> name :  </div>
<input class="form-control mb-1" type="text" name="name" value="'.$ep->NAME.'"  />

<div class="p-3 shadow "> imageurl :  </div>
<input class="form-control mb-1" type="text" name="imageurl" value="'.$ep->IMAGEURL.'"  />

<div class="p-3 shadow "> videourl :  </div>
<input class="form-control mb-1" type="text" name="videourl" value="'.$ep->VIDEOURL.'" />

<div class="p-3 shadow "> s1name :  </div>
<input class="form-control mb-1" type="text" name="sonename" value="'.$ep->SONENAME.'"  />

<div class="p-3 shadow "> server1 :  </div>
<input class="form-control mb-1" type="text" name="doodstream" value="'.$ep->DOODSTREAM.'" />

<div class="p-3 shadow "> s2name :  </div>
<input class="form-control mb-1" type="text" name="stoname" value="'.$ep->STONAME.'"  />


<div class="p-3 shadow "> server2 :  </div>
<input class="form-control mb-1" type="text" name="forshared" value="'.$ep->FORSHARED.'"  />


<div class="p-3 shadow "> s3name :  </div>
<input class="form-control mb-1" type="text" name="sthreename" value="'.$ep->STHREENAME.'"  />

<div class="p-3 shadow "> server3 :  </div>
<input class="form-control mb-1" type="text" name="uqload" value="'.$ep->UQLOAD.'"  />

<div class="p-3 shadow "> s4name :  </div>
<input class="form-control mb-1" type="text" name="sfourname" value="'.$ep->SFOURNAME.'"  />

<div class="p-3 shadow "> server4 :  </div>
<input class="form-control mb-1" type="text" name="mpupload" value="'.$ep->MPUPLOAD.'"  />

<div class="p-3 shadow "> s5name :  </div>
<input class="form-control mb-1" type="text" name="sfivename" value="'.$ep->SFIVENAME.'"  />

<div class="p-3 shadow "> server5 :  </div>
<input class="form-control mb-1" type="text" name="solidfiles" value="'.$ep->SOLIDFILES.'"  />

<div class="p-3 shadow "> s6name :  </div>
<input class="form-control mb-1" type="text" name="ssixname" value="'.$ep->SSIXNAME.'"  />

<div class="p-3 shadow "> sid :  </div>
<input class="form-control mb-1" type="text" name="sid" value="'.$ep->SID.'"  />


<div class="p-3 shadow "> server6 :  </div>
<input class="form-control mb-1" type="text" name="mpuploadan" value="'.$ep->MPUPLOADAN.'"  />
';




echo '
<button class="w-100 btn btn-dark mt-1 mb-3" type="submit" name="update" value="'.$ep->ID.'">تحديث</button>
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

    $updateUser = $database->prepare("UPDATE episode_info SET NAME = :name , IMAGEURL = :imageurl , VIDEOURL = :videourl , FORSHARED = :forshared , DOODSTREAM = :doodstream , MPUPLOAD = :mpupload , SOLIDFILES = :solidfiles , MPUPLOADAN = :mpuploadan , UQLOAD = :uqload , SONENAME = :sonename , STONAME = :stoname , STHREENAME = :sthreename , SFOURNAME = :sfourname , SFIVENAME = :sfivename , SSIXNAME = :ssixname , SID = :sid WHERE ID = :id");
    
    $updateUser->bindParam("name",$_POST['name']);
    $updateUser->bindParam("videourl",$_POST['videourl']);
    $updateUser->bindParam("stoname",$_POST['stoname']);
    $updateUser->bindParam("forshared",$_POST['forshared']);
    $updateUser->bindParam("sonename",$_POST['sonename']);
    $updateUser->bindParam("doodstream",$_POST['doodstream']);
    $updateUser->bindParam("sthreename",$_POST['sthreename']);
    $updateUser->bindParam("mpupload",$_POST['mpupload']);
    $updateUser->bindParam("sfourname",$_POST['sfourname']);
    $updateUser->bindParam("solidfiles",$_POST['solidfiles']);
    $updateUser->bindParam("sfivename",$_POST['sfivename']);
    $updateUser->bindParam("mpuploadan",$_POST['mpuploadan']);
    $updateUser->bindParam("ssixname",$_POST['ssixname']);
    $updateUser->bindParam("uqload",$_POST['uqload']);
    $updateUser->bindParam("sid",$_POST['sid']);
    $updateUser->bindParam("id",$_POST['update']);
   
    $updateUser->execute();
    
    header("location:editEPA.php");
    
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