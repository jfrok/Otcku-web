<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<?php
include 'auth.php'
?>
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
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
            rel="stylesheet">
        <!-- OWL CAROUSEL -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
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

    .neon-button {
        font-size: 1rem;

        display: inline-block;
        cursor: pointer;
        text-decoration: none;
        color: var(--clr-neon);
        border: var(--clr-neon) 0.125em solid;
        padding: 0.25em 1em;
        border-radius: 0.25em;

        text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;

        box-shadow: inset 0 0 0.5em 0 var(--clr-neon), 0 0 0.5em 0 var(--clr-neon);

        position: relative;
    }

    :root {
        --clr-neon: hsl(0, 96%, 28%);
        --clr-bg: hsl(323 21% 16%);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    .neon-button::before {
        pointer-events: none;
        content: "";
        position: absolute;
        background: var(--clr-neon);
        top: 120%;
        left: 0;

        transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
        filter: blur(1em);
        opacity: 0.7;
    }

    .neon-button::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        box-shadow: 0 0 2em 0.5em var(--clr-neon);
        opacity: 0;
        background-color: var(--clr-neon);
        z-index: -1;
        transition: opacity 100ms linear;
    }

    .neon-button:hover,
    .neon-button:focus {
        color: var(--clr-bg);
        text-shadow: none;
    }

    .neon-button:hover::before,
    .neon-button:focus::before {
        opacity: 1;
    }

    .neon-button:hover::after,
    .neon-button:focus::after {
        opacity: 1;
    }

    #main-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 100px 0 0;
    }

    .responsive {
        width: 100%;
        height: 900px;
        right: 0;
        padding-bottom: 56.25%;
        position: relative;
    }

    .responsive iframe {
        position: relative;
        width: 100%;
        height: 100%;
    }

    h1 {
        top: 155px;
        position: absolute;
        right: 0;
        left: 0px;
    }

    .story {
        top: 700px;
        position: absolute;
        color: #FFC100;
        left: 0;
        right: 0;

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
        margin: 7px;
        position: absolute;
        color: #FFA200;
    }

    .HD {
        top: 200px;
        padding: 10px;
        margin: 7px;
        position: absolute;
        color: #46FF00;
    }

    .watchnow {
        position: absolute;
        right: 0;
        left: 0;
        top: 530px;
    }

    .rate1 {
        top: 160px;
        margin: 7px;
        position: absolute;
        color: lightblue;
    }

    .user {
        position: relative;
        display: flex;
        justify-content: flex-end;
        bottom: 990px;
        margin: 7px;
        /* left: 20%; */
        right: 0;

    }

    @media screen and (max-width: 680px) {

        #main-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 100px 0 0;
        }

        .responsive {
            width: 100%;
            height: 500px;
            right: 0;
            padding-bottom: 56.25%;
            position: relative;
        }

        .responsive iframe {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .watchnow {
            position: absolute;
            right: 0;
            left: 0;
            top: 310px;
        }

        h1 {
            top: 215px;
            position: absolute;
            right: 0;
            left: 0px;
            font-size: 15px;
        }

        .user {
            bottom: 700px;
        }
    }
    </style>
    <?php require_once 'headerW.php'; ?>
    <?php


    require_once '../connectToDatabase.php';
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']->ROLE === "USER") {


            if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
                if ($_GET['search'] != "") {
                    $searchResult = $database->prepare("SELECT * FROM Disny WHERE NAME LIKE :name");
                    $searchValue = "%" . $_GET['search'] . "%";
                    $searchResult->bindParam("name", $searchValue);
                    $searchResult->execute();
                    echo '<table class="table mt-3">';
                    echo  "<tr>";

                    foreach ($searchResult as $result) {
                        // echo " ".$result['NAME'] ."";
                        //     echo  "<tr>";
                        //     echo "
                        //     <div id='main-doc-body'>
                        // <div id='main-content'>
                        //     <div class='responsive'>
                        //     ".$result['TRAILR'] ."</div>";
                    }
                } else {
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

        if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
            if ($_GET['search'] != "") {
                $searchResult = $database->prepare("SELECT * FROM Disny WHERE NAME = :name");
                $searchValue = $_GET['search'];
                $searchResult->bindParam("name", $searchValue);
                $searchResult->execute();
                echo '<table class="table mt-3">';
                echo  "<tr>";

                foreach ($searchResult as $result) {
                    echo  "<tr>";
                    //echo "<td> ".$result['NAME'] ."</td>";

                    echo "
           <div id='main-doc-body'>
       <div id='main-content'>
          <div class='responsive'>
          <iframe id='انميفوراب1-episode-iframe' src='" . $result['TRAILR'] . "' frameborder='0' allowfullscreen=''></iframe> ";
                    echo '<div class="watchnow">
       
          <a href="wa?search=' . $result['NAME'] . '&searchBtn=" class="btn btn-hover">
          <i class="bx bxs-right-arrow"></i>
            <span>Watch now</span>
                   </a>
               </div>
           </div>
       </div>
   </div>';

                    echo  "<tr>";
                    echo "<h1> " . $result['NAME'] . "</h1>";
                    //  echo "<h3 class='story'>".$result['STORY'] ."</h3>";
                    echo "<h3 class='date'>Releases" . ":  " . $result['DATE'] . "</h3>";
                    echo "<h3 class='rate'> Global Rate" . ":  " . $result['RATE'] . "</h3>";
                    echo "<h3 class='HD'>  HD </h3>";
                }
                include '../user/db_conn.php';
                $sqlUser = "SELECT s.NAME,s.ID,e.IMAGEURL,e.RATE,e.USER_ID FROM Disny e INNER JOIN users s ON e.USER_ID = s.ID WHERE e.ID = " . $result['ID'] . "";

                $results =    mysqli_query($conn, $sqlUser);
                if (mysqli_num_rows($results) > 0) {
                    $userName = mysqli_fetch_assoc($results);

                    echo "<div class='user'>
                 Added By Admin <a href='#' class='neon-button'>" . $userName['NAME'] . "
                  </a>
                  </div>";
                }
                $sql = "SELECT s.NAME, e.SID FROM `Disny` e INNER JOIN filters s ON e.SID = s.ID WHERE s.ID = " . $result['SID'] . "";

                $result =    mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $filterName = mysqli_fetch_assoc($result);
                    //  if(!empty($result['SID'])){
                    echo "<div class='rate1'>
                    <a href='filters?search=" . $filterName['SID'] . "&searchBtn=' class='neon-button'>" . $filterName['NAME'] . " </a> </div>";
                    //  }   

                }
            } else {
                echo "<p>عفوا لايوجد نتائج بحث</p>";
            }
            // }else{
            //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
        }
        ?>
        <!-- LATEST MOVIES SECTION -->
        <div class="section">
            <div class="container">
                <div class="section-header">
                    suggstions
                </div>
                <div class="movies-slide carousel-nav-center owl-carousel">
                    <!-- MOVIE ITEM -->
                    <?php
                    $searchResult = $database->prepare("SELECT * FROM Disny order by RAND() LIMIT 7");
                    $searchResult->execute();
                    $firstSlide = $searchResult->fetch();

                    $results = $searchResult->fetchAll();
                    echo ' <!-- TOP MOVIES SLIDE -->
        <div class="c">
        <div class="mimge">
        <div class="movie-item">
                <a href="trilarA?search=' . $firstSlide['NAME'] . '&searchBtn=">  <img src=' . $firstSlide['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $firstSlide['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $firstSlide['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                               
                            </div>
                        </div>
                     </div>
                        </div>
                        </a>
                </div>
                </div>';
                    foreach ($results as $result) {
                        echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimge">
                <div class="movie-item">
                <a href="trilarA?search=' . $result['NAME'] . '&searchBtn=">  <img src=' . $result['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $result['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $result['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                               
                            </div>
                        </div>
                        </div>
                        </div>
                        </a>
                </div>
                </div>';
                    }
                    echo '</div>
                            </div>
                            </a>';
                    //SELECT s.NAME,s.ID, e.USER_NAME FROM movies_info e INNER JOIN filters s ON e.USER_NAME = s.NAME WHERE s.ID = 25;
                    //SELECT s.NAME,s.ID,e.IMAGEURL,e.RATE FROM movies_info e INNER JOIN users s ON e.USER_ID = s.ID WHERE s.ID = 8;
                    ?>

                    <!-- JQUERY -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
                    </script>
                    <!-- OWL CAROUSEL -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
                        crossorigin="anonymous"></script>
                    <!-- APP SCRIPT -->
                    <!-- JQUERY -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
                    </script>
                    <!-- OWL CAROUSEL -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
                        crossorigin="anonymous"></script>
                    <!-- APP SCRIPT -->
                    <script src="../js/app.js"></script>