
<main class="container mt-3" style="text-align: center; margin-top: 100px !important;">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="../images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<style>
   *::-webkit-scrollbar {
    width: 6px;
}
*::-webkit-scrollbar-thumb {
    background-color: #8a041b;
}
*::-webkit-scrollbar-track {
    background: #333333;
}
   
   
#main-content{
    max-width: 800px;
    margin: 0 auto;
    padding: 100px 0 0;
}
.responsive{
    width: 100%;
    height: 900px;
    right: 0;
    padding-bottom: 56.25%;
    position: relative;
}
.watchnow{
  position: relative;
    right: 0;
    left: 0;
    top: 110px;
}
.responsive iframe{
    position: relative;
    width: 100%;
    height: 100%;
}
h1{
    top: 155px;
    position: absolute;
    right: 0;
    left: 0px;
}
.story{
    top: 700px;
    position: absolute;
    color: #FFC100;
    left: 0;
    right: 0;
    
}
.textS{
    position: relative;
    top: 0;
    left: 0;
}
.date{
    top: 100px;
    position: absolute;
    color: #B22B2B;
}
.rate{
    top: 120px;
    margin: 7px;
    position: absolute;
    color: #FFA200;  
}
.HD{
    top: 140px;
    padding: 10px;
    margin: 7px;
    position: absolute;
    color: #46FF00;  
}


@media screen and (max-width: 680px){

    #main-content{
    max-width: 800px;
    margin: 0 auto;
    padding: 100px 0 0;
}
.responsive{
    width: 100%;
    height: 500px;
    right: 0;
    padding-bottom: 56.25%;
    position: relative;
}
.responsive iframe{
    position: relative;
    width: 100%;
    height: 100%;
}
.watchnow{
    position:absolute;
    right: 0;
    left: 0;
    top: 310px;
}
h1{
    top: 215px;
    position: absolute;
    right: 0;
    left: 0px;
    font-size: 15px;
}
}
</style>
<?php require_once 'headerW.php'; ?>
<?php 

session_start();
require_once '../connectToDatabase.php';
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "USER"){


if(isset($_GET['searchBtn']) and isset($_GET['search'])){
    if($_GET['search'] !=""){
        $searchResult = $database->prepare("SELECT * FROM Disny WHERE NAME LIKE :name");
        $searchValue = "%" . $_GET['search'] . "%";
        $searchResult->bindParam("name",$searchValue);
        $searchResult->execute();
        echo '<table class="table mt-3">';
        echo  "<tr>";
        
        foreach($searchResult AS $result){
           // echo " ".$result['NAME'] ."";
       //     echo  "<tr>";
       //     echo "
       //     <div id='main-doc-body'>
       // <div id='main-content'>
       //     <div class='responsive'>
       //     ".$result['TRAILR'] ."</div>";
        }    
        }else{
         echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
   // }else{
    //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
       }
}
}

?>
    
    <!-- HERO SECTION -->
    <div class="hero-section">
        </div>
        <div>  
<?php

        if(isset($_GET['searchBtn']) and isset($_GET['search'])){
    if($_GET['search'] !=""){
        $searchResult = $database->prepare("SELECT * FROM Disny WHERE ID = :name");
        $searchValue = $_GET['search'];
        $searchResult->bindParam("name",$searchValue);
        $searchResult->execute();
        echo '<table class="table mt-3">';
        echo  "<tr>";
        
        foreach($searchResult AS $result){
            echo  "<tr>";
            //echo "<td> ".$result['NAME'] ."</td>";

            echo "
           <div id='main-doc-body'>
       <div id='main-content'>
          <div class='responsive'>
          <iframe id='انميفوراب1-episode-iframe' src='".$result['TRAILR'] ."' frameborder='0' allowfullscreen=''></iframe> ";

        echo'<div class="watchnow">
       
          <a href="wa.php?search='.$result['ID'].'&searchBtn=" class="btn btn-hover">
          <i class="bx bxs-right-arrow"></i>
            <span>Watch now</span>
                   </a>
               </div>
           </div>
       </div>
   </div>';
          
          echo  "<tr>";
            echo "<h1> ".$result['NAME'] ."</h1>";
         //  echo "<h3 class='story'>".$result['STORY'] ."</h3>";
         echo "<h3 class='date'>Releases". ":  ".$result['DATE'] ."</h3>";
         echo "<h3 class='rate'> Global Rate". ":  ".$result['RATE'] ."</h3>";
           echo "<h3 class='HD'>  HD </h3>";

          

        }    
        }else{
         echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
   // }else{
    //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
       }
?>
 
 <!-- JQUERY -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="../js/app.js"></script>
