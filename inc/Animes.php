<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'auth.php';
?>
<?php
include '../db_conn.php';
?>
<?php
$sqlAnime = "SELECT * FROM series order by RATE asc LIMIT 8";
$animeResult = $conn->query($sqlAnime);

$sqlRAnime = "SELECT * FROM series order by RATE asc LIMIT 8";
$animeRResult = $conn->query($sqlRAnime);

$sqlLAnime = "SELECT * FROM series order by RATE asc ";
$animeLatseResult = $conn->query($sqlLAnime);


$sqlEpisodes = "SELECT * FROM episode_info order by ID desc LIMIT 8";
$episodesResult = $conn->query($sqlEpisodes);

?>
<style>
.mimge {
    width: 290px;
    left: 0;
    top: 0;

    position: relative;
}

.mimges {

    position: relative;
}

.mimge1 {
    width: 216px;
    left: 0;
    top: 0;
    margin: 7px;

    position: relative;
}

.contanier {
    left: 20%;
    right: 10%;
    position: relative;
}

.movie-item-title {
    font-size: 15PX;
}

.conno {
    top: 70px;
    position: relative;
}

.hero-slide-item img {

    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

@media screen and (max-width: 580px) {
    .hidden {
        display: none;
    }

    .mimge {
        width: 167px;
        left: 0;
        top: 0;
        right: 100px;

        float: CENTER;
        position: relative;
    }

    .mimge1 {
        width: 157px;
        left: 0;
        top: 0;
        margin: 7px;
        position: relative;
    }

}
</style>

<?php
include 'header.php';
?>


<?php
require_once '../forms/searchm.php';
?>









<!-- HERO SECTION -->
<div class="hero-section">
    <!-- HERO SLIDE -->
    <div class="hero-slide">
        <div class="owl-carousel carousel-nav-center" id="hero-carousel">
            <!-- SLIDE ITEM -->
            <?php

            while ($showAnime = $animeResult->fetch_array()) {

                // echo "<h1> ".$result['NAME'] ."</h1>";

                echo ' 

    
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                <a href="anime?search=' . $showAnime['SR_NAME'] . '&searchBtn=">';
                if (!empty($showAnime['PANELIMG'])) {
                    echo '<img src=' . $showAnime['PANELIMG'] . '>';
                } else {
                    echo '<img src=' . $showAnime['IMAGEURL'] . '>';
                }
                echo '  <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                            ' . $showAnime['SR_NAME'] . '
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>' . $showAnime['RATE'] . '</span>
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
                            <div class="item-content-description top-down delay-4">
                            ' . $showAnime['STORY'] . '
                            </div>
                            <div class="item-action top-down delay-6">
                            <a href="../inc/anime?search=' . $showAnime['SR_NAME'] . '&searchBtn="" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
            }

            echo '  
         </div>
        </div>';
            ?>
            <!-- TOP MOVIES SLIDE -->
            <?php require_once '../forms/SLIDESa.php'; ?>
            <!-- END HERO SECTION -->
            <div class="conno">
                <div class="container">
                    <div class="section-header">
                        latest Animes
                    </div>
                    <div class="movies-slide carousel-nav-center owl-carousel">
                        <?php
                        while ($showLatestAnime = $animeRResult->fetch_array()) {

                            echo ' <!-- TOP MOVIES SLIDE -->
        <div class="c">
        <div class="mimge">
        <div class="movie-item">
                <a href="anime?search=' . $showLatestAnime['SR_NAME'] . '&searchBtn=">  <img src=' . $showLatestAnime['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showLatestAnime['SR_NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showLatestAnime['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>24 mins</span>
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
                 
                 </a>';

                        ?>


                        <div class="conno">
                            <div class="container">
                                <div class="section-header">
                                    Animes List
                                </div>


                                <?php


                                while ($showLAnime = $animeLatseResult->fetch_array()) {
                                    // echo "<h1> ".$result['NAME'] ."</h1>";
                                    echo '
            
            <div class="r">     
   <div class="mimge1">
            <div class="movie-item">
            <div class="flm">    
            <a href="anime?search=' . $showLAnime['SR_NAME'] . '&searchBtn=">  <img src=' . $showLAnime['IMAGEURL'] . '>    
               <div class="movie-item-content">
          <div class="movie-item-title">
         ' . $showLAnime['SR_NAME'] . '
         <div class="movie-info">
                <i class="bx bxs-star"></i>
                    <span>Global Rate ' . $showLAnime['RATE'] . '</span>
            
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
         </div>
         </div>
       </a>';
                                }
                                echo '</div>
        </div>
        </div>
                 
        </a>';
                                ?>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                                    crossorigin="anonymous"></script>
                                <!-- OWL CAROUSEL -->
                                <script
                                    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                                    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
                                    crossorigin="anonymous"></script>
                                <!-- APP SCRIPT -->
                                <script src="../js/app.js"></script>