
<div class="top-movies-slide">
    <div class="owl-carousel" id="top-movies-slide">
        <!-- MOVIE ITEM -->

        <!-- END HERO SLIDE -->
        <?php 
       
        
        // echo ' <!-- TOP MOVIES SLIDE -->
        // <div class="c">
        // <div class="mimges">
        // <div class="movie-item">
        //         <a href="../inc/we.php?search='.$firstSlide['ID']. '&searchBtn=">  <img src='.$firstSlide['IMAGEURL'] .'>
        //             <div class="movie-item-content">
        //                 <div class="movie-item-title">
        //                 Episode ' . $firstSlide['NAME'] . '
        //                 </div>
        //                 <div class="movie-infos">
        //                     <div class="movie-info">
                               
                              
        //                     </div>
        //                     <div class="movie-info">
        //                         <i class="bx bxs-time"></i>
        //                         <span>23 mins</span>
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
                           while ($showEpisodes = $episodesResult->fetch_array()) {
                            
                echo'
                
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="c">
                <div class="mimges">
                <div class="movie-item">
                <a href="../inc/we.php?search='.$showEpisodes['ID']. '&searchBtn=">  <img src='.$showEpisodes['IMAGEURL'] .'>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        Episode ' . $showEpisodes['NAME'] . '
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                
                                
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>23 mins</span>
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
                            echo'</div>
                            </div>
                            </a>';
                ?>