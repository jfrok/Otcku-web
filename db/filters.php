

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
<main class="container mt-3" style="text-align: center; margin-top: 100px !important;">

<style>
  body{
  overflow-X: hidden;
}
.mimge{
  width: 220px;
  left: 0;
  top: 100px;
  right: 100px;
  margin: 5px;
  float: CENTER;
  position: relative;
}
h1{
    top: 115px;
    position: absolute;
    right: 0;
    left: 0px;
}
.contanier{
  left: 20%;
  right: 10%;
  position: relative;
}
.movie-item-title{
    font-size: 15PX;
}
.section{
    top: 300px;
    position: relative;
}
.pagenum{
  position: relative;
  top: 940px;
  left: 900PX;
  float: left;
  margin: 0px;
}
.pagenum1{
  position: relative;
  top: 940px;
  left: 900PX;
  float: left;
  margin: 0px;
}
@media screen and (max-width: 680px){

.mimge{
  width: 160px;
  left: 0;
  right: 100px;
  margin: 5px;
  float: CENTER;
  position: relative;
}
.movie-item-title{
    font-size: 10PX;
}
.pagenum{
  position: relative;
  top: 1200px;
  left: 200PX;
  float: left;
}
.pagenum1{
  position: relative;
  top: 1900px;
  left: 200PX;
  float: left;
  
}
}

</style>
<?php require_once 'headerW.php'; ?>
<?php 


require_once '../connectToDatabase.php';


if(isset($_GET['searchBtn']) and isset($_GET['search'])){
    if($_GET['search'] !=""){ 
        $searchResult = $database->prepare("SELECT m.NAME,m.ID,m.IMAGEURL,m.RATE , m.DATE FROM `movies_info` m INNER JOIN filters f ON m.SID = f.ID WHERE f.ID =:ID");
        $searchValue =  $_GET['search'] ;
        $searchResult->bindParam("ID",$searchValue);
        $searchResult->execute();
        echo '<table class="table mt-3">';
        echo  "<tr>";
        
        foreach($searchResult AS $result){
           // echo " ".$result['NAME'] ."";
            echo  "<tr>";
            echo '<div class="con"> 
            <div class="r">     
   <div class="mimge">
            <div class="movie-item">
            <div class="flm">    
            <a href="trilar.php?search='.$result['ID']. '&searchBtn="</a>  <img src='.$result['IMAGEURL'] .'>    
               <div class="movie-item-content">
          <div class="movie-item-title">
          <div class="mtitle">
        ' . $result['NAME'] . '
         <div class="movie-info">
                
            
                  </div>
               </div>   
             </div>
           </div>
         </div>
         </div>
         </div>
         </div>
         </div>
       </a>';
        }    
        }else{
         echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
   // }else{
    //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
       }



?>

<body>

    <!-- HERO SECTION -->
    <div class="hero-section">
        </div>
        <div>  
<?php

        if(isset($_GET['searchBtn']) and isset($_GET['search'])){
    if($_GET['search'] !=""){
        $searchResult = $database->prepare("SELECT * FROM filters WHERE ID = :name");
        $searchValue = $_GET['search'];
        $searchResult->bindParam("name",$searchValue);
        $searchResult->execute();
        echo '<table class="table mt-3">';
        echo  "<tr>";
        
        foreach($searchResult AS $result){


           
            //echo "<td> ".$result['NAME'] ."</td>";
            

            echo "<h1> ".$result['NAME'] ."</h1>";
           // echo "<h3 class='story'>".$result['STORY'] ."</h3>";
              echo "<h3 class='date'> ".$result['DATE'] ."</h3>";
              echo "<h3 class='rate'> ".$result['RATE'] ."</h3>";
             // echo "<div class='imaget'>
             // <img src=".$result['IMAGEURL'] ."></div>";
              
           
        //   echo  '<div class="c">';
        //  echo  "<tr>";
        //    echo "<h1> ".$result['NAME'] ."</h1>";
        // echo "<h3 class='story'>".$result['STORY'] ."</h3>";
        //   echo "<h3 class='rate'> ".$result['RATE'] ."</h3>";
           

          

        }    
        }else{
         echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
   // }else{
    //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
       }
?>
 
    

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="../js/app.js"></script>
    
</body>

</html>