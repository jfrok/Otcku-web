<?php
include 'auth.php'
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
    <link rel="shortcut icon" href="../images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/series.css">
    <!-- APP CSS -->
</head>
<style>
ul {
    list-style: none;
}
</style>

<body>
    <?php require_once 'headerW.php'; ?>
    <?php


    require_once '../connectToDatabase.php';





    ?>



    <?php

    if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
        if ($_GET['search'] != "") {
            $searchResult = $database->prepare("SELECT e.NAME,e.SID,e.VIDEOURL,s.TV_NAME,e.ID,e.DOODSTREM,e.FORSHARED,e.UQLOAD 
                FROM episodetv_info e INNER JOIN tvshow s ON e.SID = s.ID WHERE e.ID = :name");
            $searchValue = $_GET['search'];
            $searchResult->bindParam("name", $searchValue);
            $searchResult->execute();
            if ($searchResult->rowCount() > 0) {

                foreach ($searchResult as $result) {

                    echo '
                          <div class="episodename">
                          <h2 id="episode">' . $result['NAME'] . ' الحلقة</h2>
                      </div>';

                    //                 echo ' <div class="col-md-12 col-sm-12 col-no-padding-left">
                    //                 </div>
                    //                 <div class="col-md-9 col-md-push-3 col-sm-12">

                    //                 <div id="episode-watch-content" class="tab-content">
                    //                 <div class="tab-pane fade in active" id="انميفوراب1">
                    //                 <div class="hardsub-content">

                    //                 <ul class="btns1" id="episode-servers">
                    //                 <li>
                    //                 <li><a id="انميفوراب-4shared-2"  data-ep-url="' . $result['FORSHARED'] . '">سيرفر1</a></li>
                    //                 <li><a id="انميفوراب-doodstream-6" data-ep-url="' . $result['DOODSTREM'] . '">سيرفر2</a></li>
                    //                 <li><a id="انميفوراب-uqload-7" data-ep-url="' . $result['UQLOAD'] . '">سيرفر3</a></li>

                    //                 </div>
                    //                 </div>
                    //                 </div>
                    //                 </div>
                    //                 </div>';

                    echo '   <section id="section1">';


                    echo "<div class='btns'>
                    <div id='main-doc-body'>
                    <div id='main-content'>
                        <div class='video'>
                        <iframe id='انميفوراب1-episode-iframe' src='" . $result['VIDEOURL'] . "' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen width='900px' height='400px'></iframe> 
                        
                        </div>
                        </div>
                        </div>
                        </div>";


                    //echo "<td> 
                    //<div class='movie-infos'> 
                    // <img src='".$result['IMAGEURL'] ."'></td>";


                    // echo "<a href=''class='rd' > ep</a>";
                    // echo "<td> 
                    // <div class='movie-infos'> 
                    // <img src='".$result['IMAGEURL'] ."'></td>";


                    echo '
                    <div class="season">
                    <h2 class="season1">season1</h2>
                    <h2 class="season2">season2</h2>
                    <h2 class="season3">season3</h2>
                    <h2 class="season4">season4</h2>
                    <h2 class="season5">season5</h2>
                    <h2 class="season6">season6</h2>
                   
                
                </div>';
                    echo ' <div class="col-md-12 col-sm-12 col-no-padding-left">
                    </div>
                    <div class="col-md-9 col-md-push-3 col-sm-12">

                    <div id="episode-watch-content" class="tab-content">
                    <div class="tab-pane fade in active" id="انميفوراب1">
                    <div class="hardsub-content">
                                   
                    ';
                    echo '
                <div class="server">
                <ul class="servers-ul" id="episode-servers">

                      <li class="server1 "> <a  id="انميفوراب-4shared-2"  data-ep-url="' . $result['FORSHARED'] . '">سيرفر 1</a></li>
                      <li class="server2 "> <a id="انميفوراب-doodstream-6"   data-ep-url="' . $result['DOODSTREM'] . '">سيرفر 2</a></li>
                      <li class="server3 "> <a id="انميفوراب-uqload-7"  data-ep-url="' . $result['UQLOAD'] . '">سيرفر 3</a></li>
                      </ul>
                </div>
                </div>
                </div>
                </div>
              
                </section>';

                    // echo '
                    // <div class="page-btns">


                    //         ';
                }

                echo '  <section class="section2">';

                $searchResult = $database->prepare("SELECT max(NAME) from episodetv_info where SID =:SID");
                $searchResult->bindParam("SID", $result['SID']);
                $searchResult->execute();
                $maxEP = $searchResult->fetchColumn();

                if ($result['NAME'] + 1 <= $maxEP) {
                    $searchResult = $database->prepare("SELECT * FROM episodetv_info WHERE SID=:SID AND NAME  = :name +1");
                    $searchResult->bindParam("SID", $result['SID']);
                    $searchResult->bindParam("name", $result['NAME']);
                    $searchResult->execute();


                    foreach ($searchResult as $result1) {
                        echo '
                 
                          
       <a href="ws.php?search=' . $result1['ID'] . '&searchBtn="">
                <div class="beforep">
                <h2 class="beforetext">الحلقة التالية</h2>
            </div>
                           
                              ';
                    }
                }
                // echo '      
                //              <a href="seriesw.php?search=' . $result['TV_NAME'] . '&searchBtn=" class="btn btn-hover">
                //              <i class="bx bxs-right-arrow"></i>
                //                <span>الحلقات</span>
                //                       </a>';

                if ($result['NAME'] - 1 >= 1) {
                    $searchResult = $database->prepare("SELECT * FROM episodetv_info WHERE SID=:SID AND NAME  = :name -1");
                    $searchResult->bindParam("SID", $result['SID']);
                    $searchResult->bindParam("name", $result['NAME']);
                    $searchResult->execute();


                    foreach ($searchResult as $result2) {
                        echo '
                                  
                              </div>
             <a href="ws.php?search=' . $result2['ID'] . '&searchBtn="">
                              <div class="afterep">
        <h2 class="aftertext">الحلقة السابقة</h2>
    </div>';
                    }
                }
                //                 include '../db_conn.php';

                //                 $data = array();
                //                 // echo array_search('name', $data);
                //                 $data = $result['TV_NAME'];

                //                 $fristTing = $data[0] . $data[1] . $data[2] . $data[3] . $data[4];

                //                 $likeSql = 'SELECT * FROM tvshow WHERE TV_NAME REGEXP "' . $fristTing . '" order by ID ';

                //                 $likeResult = $conn->query($likeSql);
                //                 //  $likeResult->fetch_array();

                //                 echo '
                // <h4>Se :</h4>
                // 								<select name="sesions" required>';

                //                 foreach ($likeResult as $showT) {

                //                     echo ' <option>' . $showT['TV_NAME'] . '</option>';
                //                 }
                //                 echo '	</select>';
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

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="../js/app.js"></script>

    <script type="text/javascript"
        src="https://ww.anime4up.com/wp-content/plugins/disqus-comment-system/public/js/comment_count.js?ver=3.0.21"
        id="disqus_count-js"></script>
    <script type="text/javascript" id="disqus_embed-js-extra">
    /* <![CDATA[ */
    var embedVars = {
        "disqusConfig": {
            "integration": "wordpress 3.0.21"
        },
        "disqusIdentifier": "16824 https:\/\/ww.anime4up.com\/?post_type=episode&p=16824",
        "disqusShortname": "anime4up1",
        "disqusTitle": "One Piece \u0627\u0644\u062d\u0644\u0642\u0629 974",
        "disqusUrl": "https:\/\/ww.anime4up.com\/episode\/one-piece-%d8%a7%d9%84%d8%ad%d9%84%d9%82%d8%a9-974\/",
        "postId": "16824"
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://ww.anime4up.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=3.0.21"
        id="disqus_embed-js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"
        id="script-js"></script>
    <script type="text/javascript"
        src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/bootstrap.min.js"
        id="bootstrap_script-js"></script>
    <script type="text/javascript" id="theme_script-js-extra">
    /* <![CDATA[ */
    var theme_data_array = {
        "theme_dir": "https:\/\/ww.anime4up.com\/wp-content\/themes\/Anime-Online-Theme-V3",
        "light_theme_time": "1615554236",
        "dark_theme_time": "1615554236"
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/theme-scripts.min.js?ver=1615554236"
        id="theme_script-js"></script>
    <script type="text/javascript"
        src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js"
        id="mCustomScrollbar_script-js"></script>
    <script type="text/javascript" src="https://c0.wp.com/c/5.7.2/wp-includes/js/wp-embed.min.js" id="wp-embed-js">
    </script>
    <script type="text/javascript" src="https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=5.7.2" async="async"
        id="remote_sdk-js"></script>
    <iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"
        style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"
        title="Twitter analytics iframe"></iframe>


</body>

</html>