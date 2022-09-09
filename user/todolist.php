<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>


<main class="container m-auto" style="max-width: 720px; direction: rtl; text-align: right;">

<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "USER"){

    echo '<form method="POST">
    <a class="w-100 btn btn-dark mb-3" href="index.php"> عودة لصفحة الرئيسية</a>


    <input class="form-control" type="text" name="text" required/>
    <button class="w-100 btn btn-danger mb-3" type="submit" name="add">إضافة</button>

    </form>';

require_once "../connectToDatabase.php";

if(isset($_POST['add'])){

$addItem = $database->prepare("INSERT INTO todolist(text,userId) VALUES(:text,:userId)");
$addItem->bindParam("text",$_POST['text']);

$userId = $_SESSION['user']->ID;

$addItem->bindParam("userId",$userId);

if($addItem->execute()){
echo '<div class="alert alert-success mt-3 mb-3"> تم اضافة بنجاح </div>';
header("refresh:2;");
}


}

$toDoItems = $database->prepare("SELECT * FROM todolist WHERE userId = :id");
$userId = $_SESSION['user']->ID;

$toDoItems->bindParam("id",$userId);
$toDoItems->execute();
foreach($toDoItems AS $items){
echo "<div class='shadow p-3 mt-3'>" .$items['text'] ."</div>";
}

}else{
    header("location:http://localhost/otcku/login.php",true); 
    die("");
}
}else{
    header("location:http://localhost/otcku/login.php",true); 
    die(""); 
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:http://localhost/otcku/login.php",true); 
    }
?> 
</main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

<body>

  <!-- NAV -->
  <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="../inc/search.php">Search</a></li>
                    <li><a href="../inc/movies.php">Movies</a></li>
                    <!--<li><a href="#">Animes</a></li>-->
                    <li><a href="../inc/Series.php">Series</a></li>
                  <!--  <li><a href="./db/mylist.php">My list</a></li>-->
                    <li><a href="#" >About</a></li>
                    <li>
                    
                        <a href="user/index.php" class="btn btn-hover">
                           <span>Account</span>
                       </a>
                    </li>
                </ul>
                 <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->
    
   <!-- APP SCRIPT -->
   <script src="../js/app.js"></script>
 
   

