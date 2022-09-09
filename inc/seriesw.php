<?php
include 'auth.php'
?>

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
    <link rel="shortcut icon" href="../images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->

    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<main class="container mt-3" style="text-align: center; margin-top: 100px !important;">
    <style>
    .mimge {
        width: 180px;
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
        top: 115px;
        position: absolute;
        right: 0;
        left: 0px;
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

    .date {
        top: 100px;
        position: absolute;
        color: #B22B2B;
    }

    .rate {
        top: 120px;
        margin: 5px;
        position: absolute;
        color: #FFA200;
    }

    .HD {
        top: 155px;
        padding: 10px;
        margin: 7px;
        position: absolute;
        color: #46FF00;
    }

    .imaget {
        position: absolute;
        width: 7%;
        margin: 6;
        top: 20%;
    }

    .con {
        top: 100px;

        position: relative;
    }

    .modal-font {
        color: #444;
    }

    .show-modal {
        position: relative;
        position: absolute;
        height: 35px;
        top: 170px;
        left: 0;
        right: 0;
        width: 90px;
        margin: 0 40px;
        font-size: 23px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 5px;
        text-transform: uppercase;
        border: 1px solid transparent;
        outline: none;
        cursor: pointer;
        background: #0d0d0d;
        overflow: hidden;
        transition: 0.6s;
    }

    .show-modal:first-child {
        color: #206592;
        border-color: #206592;
    }

    .show-modal:last-child {
        color: #ce5c0c;
        border-color: #ce5c0c;
    }

    .show-modal:before,
    button:after {
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        height: 100%;
        filter: blur(30px);
        opacity: 0.4;
        transition: 0.6s;
    }

    .show-modal:before {
        width: 60px;
        background: rgba(255, 255, 255, 0.6);
        transform: translateX(-130px) skewX(-45deg);
    }

    .show-modal:after {
        width: 30px;
        background: rgba(255, 255, 255, 0.6);
        transform: translateX(-130px) skewX(-45deg);
    }

    .show-modal:hover:before,
    .show-modal:hover:after {
        opacity: 0.6;
        transform: translateX(320px) skewX(-45deg);
    }

    .show-modal:hover {
        color: #f2f2f2;
    }

    .show-modal:hover:first-child {
        background: #206592;
    }

    .show-modal:hover:last-child {
        background: #ce5c0c;
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

    form {
        display: flex;
        padding: 20px 30px;
        margin: 0 auto;
        position: absolute;
        justify-content: center;

    }

    .sesions-selecter button {
        border: none;
        height: 30px;
        width: 30px;
        background: #252525;
    }

    .sesions-selecter select {

        border: none;
        cursor: pointer;
        width: 100px;
        height: 30px;
        border-radius: 20%;
        color: #fff;
        background: #0d0d0d;

    }

    /*    .sesions-selecter select option{*/
    /*  height: 30px;*/
    /*padding:20px 30px;*/


    /*}*/
    @media screen and (max-width: 674px) {
        form {
            margin-top: 13%;

        }

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

        h1 {
            top: 135px;
            position: absolute;
            right: 0;
            left: 0px;
            font-size: 20;
        }

        .show-modal {
            position: absolute;
            height: 35px;
            top: 210px;
            left: 0;
            right: 0;
            width: 70px;
            margin: 0 40px;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 5px;
            text-transform: uppercase;
            border: 1px solid transparent;
            outline: none;
            cursor: pointer;
            background: #0d0d0d;
            overflow: hidden;
            transition: 0.6s;
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
    </style>
    <?php

    require_once "../connectToDatabase.php";

    if (isset($_GET['search'])) {
        if ($_GET['search'] != "") {

            $searchResult = $database->prepare("SELECT e.NAME,e.ID,e.IMAGEURL,e.RATE FROM `episodetv_info` e INNER JOIN tvshow s ON e.SID = s.ID WHERE s.TV_NAME =:ID");
            $searchValue =  $_GET['search'];
            $searchResult->bindParam("ID", $searchValue);
            $searchResult->execute();
            // if (!empty($searchResult)) {
            if ($searchResult->rowCount() > 0) {


                //SELECT e.NAME,e.ID FROM users e INNER JOIN movies_info s ON s.USER_NAME = e.ID WHERE e.ID = 2
                foreach ($searchResult as $result) {
                    // echo " ".$result['NAME'] ."";
                    echo  "<tr>";
                    echo '<div class="con"> 
            <div class="r">     
   <div class="mimge">
            <div class="movie-item">
            <div class="flm">    
            <a href="./ws?search=' . $result['ID'] . '&searchBtn="</a>  <img src=' . $result['IMAGEURL'] . '>    
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
                // }else{
                //     echo "<p>عفوا لايوجد ggfg بحث</p>";
                // }
                //     echo'
                //      <!-- LATEST MOVIES SECTION -->
                // <div class="section">
                //     <div class="container">
                //         <div class="section-header">
                //             Session
                //         </div>
                //         <div class="movies-slide carousel-nav-center owl-carousel">
                //             <!-- MOVIE ITEM -->';

                //             $searchResult = $database->prepare("SELECT * FROM tvshow WHERE TV_NAME LIKE '%". $result['TV_NAME'] ."%' order by ID LIMIT 7");
                //             $searchResult->execute();
                //             $firstSlide = $searchResult->fetch();

                //             $results = $searchResult->fetchAll();
                //             echo ' <!-- TOP MOVIES SLIDE -->
                // <div class="c">
                // <div class="mimge">
                // <div class="movie-item">
                //         <a href="trilar?search=' . $firstSlide['TV_NAME'] . '&searchBtn=">  <img src=' . $firstSlide['IMAGEURL'] . '>
                //             <div class="movie-item-content">
                //                 <div class="movie-item-title">
                //                 ' . $firstSlide['TV_NAME'] . '
                //                 </div>
                //                 <div class="movie-infos">
                //                     <div class="movie-info">
                //                         <i class="bx bxs-star"></i>
                //                         <span>Global Rate ' . $firstSlide['RATE'] . '</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <i class="bx bxs-time"></i>
                //                         <span>120 mins</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <span>HD</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <span>16+</span>

                //                     </div>
                //                 </div>
                //              </div>
                //                 </div>
                //                 </a>
                //         </div>
                //         </div>';
                //             foreach ($results as $result) {
                //                 echo '

                //         <!-- END MOVIE ITEM -->
                //         <!-- MOVIE ITEM -->
                //         <div class="c">
                //         <div class="mimge">
                //         <div class="movie-item">
                //         <a href="trilar?search=' . $result['TV_NAME'] . '&searchBtn=">  <img src=' . $result['IMAGEURL'] . '>
                //             <div class="movie-item-content">
                //                 <div class="movie-item-title">
                //                 ' . $result['TV_NAME'] . '
                //                 </div>
                //                 <div class="movie-infos">
                //                     <div class="movie-info">
                //                         <i class="bx bxs-star"></i>
                //                         <span>Global Rate ' . $result['RATE'] . '</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <i class="bx bxs-time"></i>
                //                         <span>120 mins</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <span>HD</span>
                //                     </div>
                //                     <div class="movie-info">
                //                         <span>16+</span>

                //                     </div>
                //                 </div>
                //                 </div>
                //                 </div>
                //                 </a>
                //         </div>
                //         </div>';
                //             }
                //             echo '</div>
                //                     </div>
                //                     </a>';
            } else {
                echo "<p>Sorry No Results</p>";
            }
        } else {
            echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
        // }else{
        //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
    }

    ?>
    <?php require_once 'headerW.php'; ?>


    <!-- HERO SECTION -->
    <div class="hero-section">
    </div>
    <div>
        <?php

        if (isset($_GET['search'])) {
            if ($_GET['search'] != "") {
                $searchResult = $database->prepare("SELECT * FROM tvshow WHERE TV_NAME = :name");
                $searchValue = $_GET['search'];
                $searchResult->bindParam("name", $searchValue);
                $searchResult->execute();



                foreach ($searchResult as $result) {



                    //echo "<td> ".$result['NAME'] ."</td>";


                    echo "<h1> " . $result['TV_NAME'] . "</h1>";
                    // echo "<h3 class='story'>".$result['STORY'] ."</h3>";
                    echo "<h3 class='date'>Releases" . ":  " . $result['DATE'] . "</h3>";
                    echo "<h3 class='rate'> Global Rate" . ":  " . $result['RATE'] . "</h3>";
                    if (!empty($result['STORY'])) {
                        echo "<button class='show-modal'> القصة</button>";
                    }

                    // echo "<div class='imaget'>
                    // <img src=".$result['IMAGEURL'] ."></div>";


                    //   echo  '<div class="c">';
                    //  echo  "<tr>";
                    //    echo "<h1> ".$result['NAME'] ."</h1>";
                    // echo "<h3 class='story'>".$result['STORY'] ."</h3>";
                    //   echo "<h3 class='rate'> ".$result['RATE'] ."</h3>";




                }
                include '../db_conn.php';

                $data = array();
                // echo array_search('name', $data);
                $data = $result['TV_NAME'];

                $fristTing = $data[0] . $data[1] . $data[2] . $data[3] . $data[4];

                $likeSql = 'SELECT * FROM tvshow WHERE TV_NAME REGEXP "' . $fristTing . '" order by ID ';

                $likeResult = $conn->query($likeSql);
                //  $likeResult->fetch_array();

                echo '
<form>
<div class="sesions-selecter">

								<select name="search" required>';

                foreach ($likeResult as $showT) {

                    echo ' <option value="' . $showT['TV_NAME'] . '">' . $showT['TV_NAME'] . '</option>';
                }
                echo '	</select> <button type="submit">c</button>
							</div>
							</form>';

                $sValue = $_GET['search'];
                if (isset($_GET['search'])) {
                    header("location:seriesw?search=" . $showT['TV_NAME'] . "&searchBtn=");
                }
            } else {
                echo "<p>عفوا لايوجد نتائج بحث</p>";
            }
            // }else{
            //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
        }
        ?>

        <?php
        echo '<div class="modal hidden">
<button class="close-modal">&times;</button>
<div class="modal-font">
<h1></h1>
<p>
' . $result['STORY'] . '
</p>
</div>
</div>
<div class="overlay hidden"></div>';
        ?>

        <!-- SCRIPT -->
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
        <!-- APP SCRIPT -->
        <script src="../js/hidden.js"></script>
        <script src="../js/app.js"></script>

        </body>

        </html>