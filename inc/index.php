<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'auth.php';
?>
<?php
include 'header.php';
require_once '../forms/searchm.php'; ?>

<?php

include '../db_conn.php';
$series = "SELECT * FROM tvshow order by ID desc LIMIT 7";
$seriesResult  = $conn->query($series);
//$firsSeriesShow = $seriesResult->fetch_array();

$moviesRate = "SELECT * FROM movies_info order by RATE desc LIMIT 7";
$moviesRateResult  = $conn->query($moviesRate);
//moviesRateResult
// $firsMoviesRateShow = $moviesRateResult->fetch_array();

$moviesDisney = "SELECT * FROM Disny order by ID desc LIMIT 7";
$moviesDisneyResult  = $conn->query($moviesDisney);
//$firsShowDisneyResult = $moviesDisneyResult->fetch_array();

$anime = "SELECT * FROM series order by ID desc LIMIT 7";
$animeResult  = $conn->query($anime);
//$firsMoviesShow = $moviesResult->fetch_array();

?>


<body>
    <?php require_once '../connectToDatabase.php'; ?>

    <?php
    $moviesName = $database->prepare("SELECT * FROM filters order by ID");
    $moviesName->execute();
    if ($moviesName->rowCount() > 0) {
        $rows  = $moviesName->fetchAll();
        echo '<div class="filters "style="display: none";>';
        foreach ($rows as $row) {
            echo '   
        <a href="filters?search=' . $row['ID'] . '&searchBtn=">  
<button class="filter-options">' . $row['NAME'] . '</button></a>
</div>
';
        }
    }


    echo '</div>';

    ?>

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <a href="trilar?search=%20Wrath%20of%20Man%202021&searchBtn="> <img
                            src="../images/wrath-of-man-banner.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    Wrath of Man
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>7.4</span>
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
                                    تتبع المؤامرة H ، شخصية باردة وغامضة تعمل في شركة شاحنات نقدية مسؤولة عن نقل مئات
                                    الملايين من الدولارات حول لوس أنجلوس كل أسبوع.

                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="trilar.php?search=%20Wrath%20of%20Man%202021&searchBtn="
                                        class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <a href="seriesw.php?search=La%20Casa%20de%20Papel%20S1&searchBtn="> <img src="../images/lacaso.jpg"
                            alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    La Casa de Papel
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>8.3</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>13 Episodes</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>18+</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    تحاول مجموعة غير عادية من اللصوص تنفيذ أكثر عمليات السطو مثالية في التاريخ الإسباني
                                    - سرقة 2.4 مليار يورو من دار سك العملة الملكية في إسبانيا.

                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="seriesw.php?search=La%20Casa%20de%20Papel%20S1&searchBtn="
                                        class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <a href="seriesw.php?search=WandaVision&searchBtn="> <img src="../images/wanda-banner.jpg" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    Wanda Vision
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>8.1</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>5h 50 mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>16+</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    يمزج أسلوب المسلسلات الكوميدية الكلاسيكية مع MCU ، حيث يبدأ Wanda Maximoff و Vision
                                    - وهما كائنان يتمتعان بقوة فائقة يعيشان حياتهما المثالية في الضواحي - في الشك في أن
                                    كل شيء ليس كما يبدو.

                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="seriesw?search=WandaVision&searchBtn=" class="btn btn-hover">
                                        <i class="bx bxs-right-arrow"></i>
                                        <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->


        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->

                <!-- END HERO SLIDE -->
                <?php

                while ($showSeries = $seriesResult->fetch_array()) {
                    echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimges">
                <div class="movie-item">
                <a href="seriesw?search=' . $showSeries['TV_NAME'] . '&searchBtn=">  <img src=' . $showSeries['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showSeries['TV_NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showSeries['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">';
                    $sql8 = "SELECT * FROM mylist JOIN tvshow ON sid = ID WHERE sid = " . $showSeries["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                    $result8 = $conn->query($sql8);
                    $verfy = $result8->num_rows;

                    if ($verfy > 0) {
                        echo '     <i class="fa-solid fa-circle-check"></i>';
                    } else {

                        echo ' 
   <form method="POST">
      <button id="add" type="submit" name="add-to-list-S' . $showSeries['ID'] . '">
        <i class="fa-solid fa-circle-plus"></i> 
      </button>
    </form>';
                    }

                    echo '   </div>
                        </div>
                        </div>
                        </div>
                        </a>
                </div>
                </div>';

                    if (isset($_POST['add-to-list-S' . $showSeries['ID'] . ''])) {

                        $favSqlV = "SELECT * FROM mylist WHERE sid = " . $showSeries["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                        $resultV = $conn->query($favSqlV);

                        $verify = $resultV->num_rows;
                        if ($verify > 0) {

                            echo 'ALREDY EXIXT';
                        } else {
                            $favSql = "INSERT INTO mylist(mid,did,sid,uid)VALUES(0,0,'" . $showSeries["ID"] . "','" . $_SESSION['user']->ID . "')";
                            $result = $conn->query($favSql);


                            if ($result == true) {
                                echo 'succses';
                            }
                        }
                    }
                }
                // }
                echo '</div>
                            </div>
                            </a>';


                ?>

                <!-- LATEST MOVIES SECTION -->
                <div class="section">
                    <div class="container">
                        <div class="section-header">
                            popular movies
                        </div>
                        <div class="movies-slide carousel-nav-center owl-carousel">
                            <!-- MOVIE ITEM -->
                            <?php
                            while ($showRateMovies = $moviesRateResult->fetch_array()) {

                                echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimge">
                <div class="movie-item">
                <a href="trilar?search=' . $showRateMovies['NAME'] . '&searchBtn=">  <img src=' . $showRateMovies['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showRateMovies['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showRateMovies['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">';

                                $sql5 = "SELECT * FROM mylist JOIN movies_info ON mid = ID WHERE mid = " . $showRateMovies["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                $result5 = $conn->query($sql5);
                                $verfy = $result5->num_rows;

                                if ($verfy > 0) {
                                    echo '     <i class="fa-solid fa-circle-check"></i>';
                                } else {

                                    echo ' 
   <form method="POST">
      <button id="add" type="submit" name="add-to-list' . $showRateMovies['ID'] . '">
        <i class="fa-solid fa-circle-plus"></i> 
      </button>
    </form>';
                                }

                                echo '              

                            </div>
                        </div>
                        </div>
                        </a>
                        </div>
                   
                </div>
                </div>';
                                if (isset($_POST['add-to-list' . $showRateMovies['ID'] . ''])) {

                                    $favSqlV = "SELECT * FROM mylist WHERE mid = " . $showRateMovies["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                    $resultV = $conn->query($favSqlV);

                                    $verify = $resultV->num_rows;
                                    if ($verify > 0) {

                                        echo 'ALREDY EXIXT';
                                    } else {
                                        $favSql = "INSERT INTO mylist(mid,uid)VALUES('" . $showRateMovies["ID"] . "','" . $_SESSION['user']->ID . "')";
                                        $result = $conn->query($favSql);


                                        if ($result == true) {
                                            echo 'succses';
                                        }
                                    }
                                }
                            }


                            echo '</div>
                            </div>
                            </a>
                           ';


                            ?>

                            <!-- LATEST CARTOONS SECTION -->
                            <div class="section">
                                <div class="container">
                                    <div class="section-header">
                                        Disney popular
                                    </div>
                                    <div class="movies-slide carousel-nav-center owl-carousel">
                                        <?php
                                        while ($showDisneyMovies = $moviesDisneyResult->fetch_array()) {
                                            echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimge">
                <div class="movie-item">
                <a href="trilarA?search=' . $showDisneyMovies['NAME'] . '&searchBtn=">  <img src=' . $showDisneyMovies['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showDisneyMovies['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showDisneyMovies['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
   
                            </div>
                            <div class="movie-info">';

                                            $sql6 = "SELECT * FROM mylist JOIN Disny ON did = ID WHERE did = " . $showDisneyMovies["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                            $result6 = $conn->query($sql6);
                                            $verfy = $result6->num_rows;

                                            if ($verfy > 0) {
                                                echo '     <i class="fa-solid fa-circle-check"></i>';
                                            } else {

                                                echo ' 
   <form method="POST">
      <button id="add" type="submit" name="add-to-list-dy' . $showDisneyMovies['ID'] . '">
        <i class="fa-solid fa-circle-plus"></i> 
      </button>
    </form>';
                                            }
                                            echo '
                            </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
                </div>';

                                            if (isset($_POST['add-to-list-dy' . $showDisneyMovies['ID'] . ''])) {

                                                $favSqlV = "SELECT * FROM mylist WHERE did = " . $showDisneyMovies["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                                $resultV = $conn->query($favSqlV);

                                                $verify = $resultV->num_rows;
                                                if ($verify > 0) {

                                                    echo 'ALREDY EXIXT';
                                                } else {
                                                    $favSql = "INSERT INTO mylist(mid,did,uid)VALUES(0,'" . $showDisneyMovies["ID"] . "','" . $_SESSION['user']->ID . "')";
                                                    $result = $conn->query($favSql);


                                                    if ($result == true) {
                                                        echo 'succses';
                                                    }
                                                }
                                            }
                                        }
                                        echo '</div>
                            </div>
                            </div>
                            </div>
                            </a>
                            ';
                                        ?>

                                        <!-- LATEST CARTOONS SECTION -->
                                        <div class="section">
                                            <div class="container">
                                                <div class="section-header">
                                                    latest animes
                                                </div>
                                                <div class="movies-slide carousel-nav-center owl-carousel">
                                                    <?php
                                                    while ($showAnime = $animeResult->fetch_array()) {
                                                        echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimge">
                <div class="movie-item">
                <a href="anime?search=' . $showAnime['SR_NAME'] . '&searchBtn=">  <img src=' . $showAnime['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showAnime['SR_NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showAnime['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                                
                            </div>
                            <div class="movie-info">';

                                                        $sql7 = "SELECT * FROM mylist JOIN series ON aid = ID WHERE aid = " . $showAnime["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                                        $result7 = $conn->query($sql7);
                                                        $verfy = $result7->num_rows;

                                                        if ($verfy > 0) {
                                                            echo '     <i class="fa-solid fa-circle-check"></i>';
                                                        } else {

                                                            echo ' 
  <form method="POST">
      <button id="add" type="submit" name="add-to-list-A' . $showAnime['ID'] . '">
        <i class="fa-solid fa-circle-plus"></i> 
      </button>
    </form>';
                                                        }
                                                        echo '      </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
                </div>';

                                                        if (isset($_POST['add-to-list-A' . $showAnime['ID'] . ''])) {

                                                            $favSqlV = "SELECT * FROM mylist WHERE aid = " . $showAnime["ID"] . " AND uid = " . $_SESSION['user']->ID . "";
                                                            $resultV = $conn->query($favSqlV);

                                                            $verify = $resultV->num_rows;
                                                            if ($verify > 0) {

                                                                echo 'ALREDY EXIXT';
                                                            } else {
                                                                $favSql = "INSERT INTO mylist(mid,did,aid,uid)VALUES(0,0,'" . $showAnime["ID"] . "','" . $_SESSION['user']->ID . "')";
                                                                $result = $conn->query($favSql);


                                                                if ($result == true) {
                                                                    echo 'succses';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    echo '</div>
                            </div>
                            </div>
                            </div>
                            </a>
                            ';
                                                    ?>


                                                    <!-- END LATEST CARTOONS SECTION -->

                                                    <!-- SPECIAL MOVIE SECTION -->
                                                    <div class="section">
                                                        <div class="hero-slide-item">
                                                            <img src="../images/transformer-banner.jpg" alt="">
                                                            <div class="overlay"></div>
                                                            <div class="hero-slide-item-content">
                                                                <div class="item-content-wraper">
                                                                    <div class="item-content-title">
                                                                        Transformer
                                                                    </div>
                                                                    <div class="movie-infos">
                                                                        <div class="movie-info">
                                                                            <i class="bx bxs-star"></i>
                                                                            <span>9.5</span>
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
                                                                    <div class="item-content-description">
                                                                        يتعلم الأوتوبوت عن مركبة فضائية Cybertronian
                                                                        مخبأة على القمر ، ويتسابقون ضد الديسيبتيكون
                                                                        للوصول إليها ومعرفة أسرارها.
                                                                    </div>
                                                                    <div class="item-action">
                                                                        <a href="./inc/trilar?search=11&searchBtn="
                                                                            class="btn btn-hover">
                                                                            <i class="bx bxs-right-arrow"></i>
                                                                            <span>Watch now</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END SPECIAL MOVIE SECTION -->


                                                    <?php require_once 'footer.php'; ?>
</body>

</html>