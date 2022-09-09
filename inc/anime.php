<?php
include 'auth.php';
require_once 'headerW.php';
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->

    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>


<style>
.mimge {
    width: 185px;
    left: 0;
    top: 0;
    right: 100px;
    margin: 20px;
    float: right;
    position: relative;
}

.contanier {
    left: 20%;
    right: 10%;
    position: relative;
}

.movie-item-title {
    font-size: 10PX;
}

.section {
    top: 300px;
    position: relative;
}

.mtitle {

    font-size: 19px;
}

h1 {
    margin-top: 2%;
    display: flex;
    justify-content: center;
}

.story {
    top: 200px;
    position: absolute;
    color: #FFC100;
    left: 0;
    right: 65%;
    font-size: 13px;

}

.textS {
    position: relative;
    top: 0;
    left: 0;
}

.details {

    text-align: center;
    width: 300px;

    border-left-color: #B22B2B;
    border-left-style: solid;
    border-left-width: 5px;
    /* 
border: 5px solid #B22B2B; */
    box-shadow: 7px 8px 0 #000;
}

/* .date{
    top: 100px;
    position: absolute;
    color: #B22B2B;
}
.rate{
    top: 120px;
    margin: 5px;
    position: absolute;
    color: #FFA200;  
}
.HD{
    top: 155px;
    padding: 10px;
    margin: 7px;
    position: absolute;
    color: #46FF00;  
} */
.imaget {
    position: absolute;
    width: 7%;
    margin: 6;
    top: 20%;
}

.con {
    margin-top: 5%;
}

.stu {
    top: 140px;
    margin: 15px;
    position: absolute;
    color: greenyellow;
}

.modal-font {
    color: #444;
}

.show-modal {

    height: 35px;
    top: 200px;

    width: 90px;

    font-size: 23px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 5px;
    text-transform: uppercase;
    border: 1px solid transparent;
    outline: none;
    cursor: pointer;
    background: gray;
    overflow: hidden;
    transition: 0.6s;
}


.close-modal {
    position: absolute;
    top: 1.2rem;
    right: 2rem;
    font-size: 5rem;
    color: #333;
    cursor: pointer;
    border: none;
    background: none;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
}

p {
    font-size: 1.8rem;
}

/* -------------------------- */
/* CLASSES TO MAKE MODAL WORK */
.hidden {
    display: none;
}

.modal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;

    background-color: white;
    padding: 6rem;
    border-radius: 5px;
    box-shadow: 0 3rem 5rem rgba(0, 0, 0, 0.3);
    z-index: 10;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(3px);
    z-index: 5;
}

@media screen and (max-width: 1374px) {

    .mimge {
        width: 150px;
        left: 0;
        top: 0;
        right: 100px;
        margin: 30px;
        float: CENTER;
        position: relative;
    }
}

@media screen and (max-width: 674px) {

    .mimge {
        width: 112px;
        left: 0;
        top: 0;
        right: 100px;
        margin: 30px;
        float: CENTER;
        position: relative;
    }

    .imaget {
        position: absolute;
        width: 15%;
        margin: 6;
    }

    .story {
        top: 160px;
        position: absolute;
        color: #FFC100;
        left: 0px;
        right: 110;
        font-size: 10px;
        padding: 30px;

    }

    .date {
        top: 200px;
        position: absolute;
        color: #B22B2B;
        right: 0;
        left: 0px;
    }

    .rate {
        top: 176px;
        margin: 7px;
        position: absolute;
        color: #FFA200;
        right: 0;
        left: 0px;
    }

    .stu {
        top: 220px;
        margin: 7px;
        position: absolute;
        color: greenyellow;
        right: 0;
        left: 0px;
    }

    p {
        font-size: 10px;
    }
}

@media screen and (max-width: 1274px to 700px) {

    .mimge {
        width: 170px;
        left: 0;
        top: 0;
        right: 100px;
        margin: 30px;
        float: CENTER;
        position: relative;
    }
}
</style>
<?php
require_once '../db_conn.php';

?>
<?php


if (isset($_GET['search'])) {
    if ($_GET['search'] != "") {
        $searchValue =  $_GET['search'];
        $detailsSql = "SELECT * FROM series WHERE SR_NAME = '$searchValue'";
        $results = $conn->query($detailsSql);
        $showResult = $results->fetch_array();



        echo " <h1>" . $showResult['SR_NAME'] . "</h1>
    
    <div class='details'>
    <h3 style='color: red;'>   Releases" . ":  " . $showResult['DATE'] . "</h3><br>
    <h3 style='color: gold;'>  Global Rate" . ":  " . $showResult['RATE'] . "</h3><br>
      <h3 style='color: greenyellow;'>  " . $showResult['STATUS'] . "</h3><br>
      </div>
      <button class='show-modal'> القصة</button>

      ";

        echo '<div class="modal hidden">
     <button class="close-modal">&times;</button>
     <div class="modal-font">
     <h1></h1>
     <p>
     ' . $showResult['STORY'] . '
     </p>
     </div>
     </div>
     <div class="overlay hidden"></div>';



        $sqlResult = "SELECT e.NAME,e.ID,e.IMAGEURL,e.RATE FROM `episode_info` e INNER JOIN series s ON e.SID = s.ID WHERE s.SR_NAME ='$searchValue' order by ID asc";
        $results = $conn->query($sqlResult);


        foreach ($results as $result) {
            // echo " ".$result['NAME'] ."";

            echo '<div class="con"> 
            <div class="r">     
   <div class="mimge">
            <div class="movie-item">
            <div class="flm">    
            <a href="./we?search=' . $result['ID'] . '&searchBtn="</a>  <img src=' . $result['IMAGEURL'] . '>    
               <div class="movie-item-content">
          <div class="movie-item-title">
          <div class="mtitle">
          الحلقة ' . $result['NAME'] . '
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
    }
}


?>

<body>

    <!-- HERO SECTION -->
    <div class="hero-section">
    </div>
    <div>



        <!-- SCRIPT -->
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
        <!-- APP SCRIPT -->
        <script src="../js/app.js"></script>
        <script src="../js/hidden.js"></script>

</body>

</html>