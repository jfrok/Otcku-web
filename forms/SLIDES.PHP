


  
        <?php 
        $searchResult = $database->prepare("SELECT * FROM series order by RATE asc");
        $searchResult->execute();
        $firstSlide = $searchResult->fetch();
       
                    $results = $searchResult->fetchAll();
                    //print_r($results);
                    echo'
                    <body>
                 <!-- HERO SECTION -->
                    <div class="hero-section">
                        <!-- HERO SLIDE -->
                        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                            ' . $firstSlide['NAME'] . '
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>' .$firstSlide['RATE'] .'</span>
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
                            ' .$firstSlide['STORY'] .'
                            </div>
                            <div class="item-action top-down delay-6">
                            <a href="../inc/anime.php?search='.$firstSlide['ID']. '&searchBtn="" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                ';
        foreach($results AS $result){
         
           // echo "<h1> ".$result['NAME'] ."</h1>";
           
           echo' 

    
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                <a href="../inc/anime.php?search='.$result['ID']. '&searchBtn=">  <img src='.$result['IMAGEURL'] .'>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                            ' . $result['NAME'] . '
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>' . $result['RATE'] . '</span>
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
                            ' .$result['STORY'] .'
                            </div>
                            <div class="item-action top-down delay-6">
                            <a href="../inc/anime.php?search='.$result['ID']. '&searchBtn="" class="btn btn-hover">
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
               

  