<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require_once 'header.php'; ?>


<?php
include 'db_conn.php';
$series = "SELECT * FROM tvshow order by ID desc LIMIT 7";
$seriesResult  = $conn->query($series);
//$firsSeriesShow = $seriesResult->fetch_array();

$movies = "SELECT * FROM movies_info order by ID desc LIMIT 7";
$moviesResult  = $conn->query($movies);
//$firsMoviesShow = $moviesResult->fetch_array();

$moviesRate = "SELECT * FROM movies_info order by RATE desc LIMIT 7";
$moviesRateResult  = $conn->query($moviesRate);
//moviesRateResult
//$firsMoviesRateShow = $moviesRateResult->fetch_array();

$moviesDisney = "SELECT * FROM Disny order by ID desc LIMIT 7";
$moviesDisneyResult  = $conn->query($moviesDisney);
//$firsShowDisneyResult = $moviesDisneyResult->fetch_array();
?>



<body>

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <a href="./db/trilar.php?search=7&searchBtn="> <img src="./images/wrath-of-man-banner.jpg" alt="">
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
                                    <a href="./db/trilar.php?search=7&searchBtn=" class="btn btn-hover">
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
                    <a href="./db/series.php?search=3&searchBtn="> <img src="./images/lacaso.jpg" alt="">
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
                                    <a href="./db/series.php?search=3&searchBtn=" class="btn btn-hover">
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
                    <a href="./db/series.php?search=2&searchBtn="> <img src="./images/wanda-banner.jpg" alt="">
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
                                    <a href="./db/series.php?search=2&searchBtn=" class="btn btn-hover">
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
                <a href="./db/series.php?search=' . $showSeries['ID'] . '&searchBtn=">  <img src=' . $showSeries['IMAGEURL'] . '>
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
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                        </div>
                        </div>
                        </a>
                </div>
                </div>';
                    //}
                }
                echo '</div>
                            </div>
                            </a>';
                ?>

                <!-- LATEST MOVIES SECTION -->
                <div class="section">
                    <div class="container">
                        <div class="section-header">
                            purple movies
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
                <a href="./db/trilar.php?search=' . $showRateMovies['ID'] . '&searchBtn=">  <img src=' . $showRateMovies['IMAGEURL'] . '>
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
                <a href="./db/trilarA.php?search=' . $showDisneyMovies['ID'] . '&searchBtn=">  <img src=' . $showDisneyMovies['IMAGEURL'] . '>
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
                            <div class="movie-info">
                                
                            </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
                </div>';
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
                                                    LATEST MOVIES
                                                </div>
                                                <div class="movies-slide carousel-nav-center owl-carousel">
                                                    <?php


                                                    while ($showMovies = $moviesResult->fetch_array()) {

                                                        echo '
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimge">
                <div class="movie-item">
                <a href="./db/trilar.php?search=' . $showMovies['ID'] . '&searchBtn=">  <img src=' . $showMovies['IMAGEURL'] . '>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        ' . $showMovies['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>Global Rate ' . $showMovies['RATE'] . '</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span></span>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </a>
                </div>';
                                                    }

                                                    echo '</div>
                            </div>
                            </div>
                            </div>
                            ';

                                                    ?>

                                                    <!-- END LATEST CARTOONS SECTION -->

                                                    <!-- SPECIAL MOVIE SECTION -->
                                                    <div class="section">
                                                        <div class="hero-slide-item">
                                                            <img src="./images/transformer-banner.jpg" alt="">
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
                                                                        <a href="https://ootcku.xyz/db/trilar.php?search=11&searchBtn=" class="btn btn-hover">
                                                                            <i class="bx bxs-right-arrow"></i>
                                                                            <span>Watch now</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END SPECIAL MOVIE SECTION -->
                                                    <!-- PRICING SECTION -->
                                                    <div class="section">
                                                        <div class="container">
                                                            <div class="pricing">
                                                                <div class="pricing-header">
                                                                    Otc<span class="main-color">k</span>u
                                                                </div>
                                                                <div class="pricing-list">
                                                                    <div class="row">
                                                                        <div class="col-4 col-md-12 col-sm-12">
                                                                            <div class="pricing-box">
                                                                                <div class="pricing-box-header">
                                                                                    <div class="pricing-name">
                                                                                        Basic
                                                                                    </div>
                                                                                    <div class="pricing-price">
                                                                                        Free
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pricing-box-content">
                                                                                    <p>Originals</p>
                                                                                    <p>Swich plans anytime</p>
                                                                                    <p>Watch movies</p>
                                                                                    <p>HD</p>
                                                                                    <p>Anime</p>
                                                                                    <p>Disney</p>
                                                                                    <p>Remove Ads</p>
                                                                                    <p><del>65+ top Live</del></p>
                                                                                    <p><del>TV Channels</del></p>
                                                                                </div>
                                                                                <div class="pricing-box-action">
                                                                                    <a href="./loginup/register.php" class="btn btn-hover">
                                                                                        <span> Register Now</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 col-md-12 col-sm-12">
                                                                            <div class="pricing-box hightlight">
                                                                                <div class="pricing-box-header">
                                                                                    <div class="pricing-name">
                                                                                        Soon.. Premium
                                                                                    </div>
                                                                                    <div class="pricing-price">
                                                                                        $0.99 <span>/month</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pricing-box-content">
                                                                                    <p>Originals</p>
                                                                                    <p>Swich plans anytime</p>
                                                                                    <p>Watch movies</p>
                                                                                    <p>Watch Animes</p>
                                                                                    <p>HD</p>
                                                                                    <p>65+ top Live</p>
                                                                                    <p><del>TV Channels</del></p>
                                                                                </div>
                                                                                <div class="pricing-box-action">
                                                                                    <a href="#" class="btn btn-hover">
                                                                                        <span>Soon..</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 col-md-12 col-sm-12">
                                                                            <div class="pricing-box">
                                                                                <div class="pricing-box-header">
                                                                                    <div class="pricing-name">
                                                                                        Soon.. VIP
                                                                                    </div>
                                                                                    <div class="pricing-price">
                                                                                        $0.99 <span>/month</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pricing-box-content">
                                                                                    <p>Originals</p>
                                                                                    <p>Swich plans anytime</p>
                                                                                    <p>Watch movies</p>
                                                                                    <p>Watch Animes</p>
                                                                                    <p>HD</p>
                                                                                    <p>65+ top Live</p>
                                                                                    <p>TV Channels</p>
                                                                                </div>
                                                                                <div class="pricing-box-action">
                                                                                    <a href="#" class="btn btn-hover">
                                                                                        <span>Soon..</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END PRICING SECTION -->

                                                    <?php require_once 'footer.php'; ?>

</body>

</html>