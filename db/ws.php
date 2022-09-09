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
        *::-webkit-scrollbar {
            width: 6px;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #8a041b;
        }

        *::-webkit-scrollbar-track {
            background: #333333;
        }

        body {
            overflow-x: hidden;
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

        ul {

            list-style: none;

        }

        .btns1 {
            right: 500px;
            top: 400px;
            position: relative;
            text-decoration: none;
            cursor: pointer;
            color: red;
        }

        .responsive iframe {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /*.story{
    top: 700px;
    position: absolute;
    color: #FFC100;
    left: 0;
    right: 0;
    
}*/
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

        .rate1 {
            display: flex;
            justify-content: center;
        }

        .HD {
            top: 155px;
            padding: 10px;
            margin: 7px;
            position: absolute;
            color: #46FF00;
        }

        .rp {
            top: 830px;
            left: 310px;
            color: red;
            position: absolute;
        }

        .rd {
            top: 890px;
            left: 0px;
            right: 0px;
            color: gold;
            position: absolute;
        }

        .watchnow {
            position: absolute;
            width: 40%;
            top: 830px;
        }

        .watchnow1 {
            position: absolute;
            width: 60%;
            top: 930px;
        }

        .watchnow2 {
            position: absolute;
            width: 140%;
            top: 930px;
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


        .neon-button {
            font-size: 25px;

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

        .neon-button:hover::after,
        .neon-button:focus::after {
            opacity: 1;
        }

        .neon-button1 {
            font-size: 15px;
            display: inline-block;
            cursor: pointer;
            margin: 5px;
            text-decoration: none;
            color: var(--clr-neon1);
            border: var(--clr-neon1) 0.125em solid;
            padding: 0.25em 1em;
            border-radius: 25px 25px;
            text-shadow: 0 0 0.125em hsl(0 0% 10% / 0.3), 0 0 0.45em currentColor;
            box-shadow: inset 0 0 0.5em 0 var(--clr-neon1), 0 0 0.5em 0 var(--clr-neon1);
            position: relative;
        }

        .neon-button1 {
            font-size: 15px;
            display: inline-block;
            cursor: pointer;
            margin: 5px;
            text-decoration: none;
            color: var(--clr-neon1);
            border: var(--clr-neon1) 0.125em solid;
            padding: 0.25em 1em;
            border-radius: 25px 25px;
            text-shadow: 0 0 0.125em hsl(0 0% 10% / 0.3), 0 0 0.45em currentColor;
            box-shadow: inset 0 0 0.5em 0 var(--clr-neon1), 0 0 0.5em 0 var(--clr-neon1);
            position: relative;
        }



        .neon-button1::before {
            pointer-events: none;
            content: "";
            position: absolute;
            background: var(--clr-neon1);
            top: 120%;
            left: 0;
            transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
            filter: blur(1em);
            opacity: 0.7;
        }

        .neon-button1::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            box-shadow: 0 0 1em 0.8em var(--clr-neon1);
            opacity: 0;
            background-color: var(--clr-neon1);
            z-index: -1;
            transition: opacity 100ms linear;
        }

        .neon-button1:hover,
        .neon-button1:focus {
            color: var(--clr-bg);
            text-shadow: none;
        }

        .neon-button1:hover::before,
        .neon-button1:focus::before {
            opacity: 1;
        }

        .neon-button1:hover::after,
        .neon-button1:focus::after {
            opacity: 1;
        }


        .neon-button1:hover::after,
        .neon-button1:focus::after {
            opacity: 1;
        }

        ul {

            list-style: none;

        }

        .btns1 {
            right: 0px;
            top: 70px;
            text-decoration: none;
            clear: both;
            float: right;
            cursor: pointer;
            position: absolute;
            color: goldenrod;
        }

        .page-btns {
            display: flex;
            justify-content: space-between;
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

            .rp {
                top: 575px;
                left: 10px;
                color: red;
                position: absolute;
            }

            .watchnow {
                position: absolute;
                width: 40%;
                top: 580px;

            }

            .rate1 {
                top: 220px;
                position: absolute;
                font-size: 13px;
                right: 0;
                left: 140px;
            }

            .neon-button {
                font-size: 13px;
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

            .watchnow {
                position: absolute;
                width: 40%;
                top: 220px;
            }

            .btns1 {
                right: 0px;
                top: 0px;
                text-decoration: none;
                clear: both;
                float: right;
                cursor: pointer;
                position: relative;
                color: red;
            }

            .watchnow1 {
                position: absolute;
                width: 45%;
                top: 600px;
            }

            .watchnow2 {
                position: absolute;
                width: 145%;
                top: 600px;
            }

            .btns1 {
                right: 0px;
                top: 70px;
                text-decoration: none;
                clear: both;
                float: right;
                cursor: pointer;
                position: absolute;
                color: goldenrod;
            }

            .neon-button1 {
                font-size: 8px;
                display: inline-block;
                cursor: pointer;
                margin: 5px;
                clear: both;
                text-decoration: none;
                color: var(--clr-neon1);
                border: var(--clr-neon1) 0.125em solid;
                padding: 0.25em 1em;
                border-radius: 25px 25px;
                text-shadow: 0 0 0.125em hsl(0 0% 10% / 0.3), 0 0 0.45em currentColor;
                box-shadow: inset 0 0 0.5em 0 var(--clr-neon1), 0 0 0.5em 0 var(--clr-neon1);
                position: relative;
            }
        }
    </style>

    <body>

        <?php require_once 'headerW.php'; ?>

        <?php


        require_once '../connectToDatabase.php';



        echo '


        <!-- HERO SECTION -->
        <div class="hero-section">
        </div>
        <div>';


        if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
            if ($_GET['search'] != "") {
                $searchResult = $database->prepare("SELECT * FROM episodetv_info WHERE ID = :name");
                $searchValue = $_GET['search'];
                $searchResult->bindParam("name", $searchValue);
                $searchResult->execute();


                foreach ($searchResult as $result) {
                    echo  '<div class="c">';
                    echo  "<tr>";
                    echo "<div class='rate1'>
          <h1 class='neon-button'> Episode" . "  " . $result['NAME'] . "</h1></div>";


                    echo ' <div class="col-md-12 col-sm-12 col-no-padding-left">
            </div>
            <div class="col-md-9 col-md-push-3 col-sm-12">
            
            <div id="episode-watch-content" class="tab-content">
            <div class="tab-pane fade in active" id="انميفوراب1">
            <div class="hardsub-content">
            
            <ul class="btns1" id="episode-servers">
            <li>
            <li class="neon-button1"><a id="انميفوراب-4shared-2"  data-ep-url="' . $result['FORSHARED'] . '">سيرفر1</a></li>
            <li class="neon-button1"><a id="انميفوراب-doodstream-6" data-ep-url="' . $result['DOODSTREM'] . '">سيرفر2</a></li>
            <li class="neon-button1"><a id="انميفوراب-uqload-7" data-ep-url="' . $result['UQLOAD'] . '">سيرفر3</a></li>
        
            </div>
            </div>
            </div>
            </div>
            </div>';

                    echo "<div class='btns'>
           <div id='main-doc-body'>
           <div id='main-content'>
               <div class='responsive'>
               <iframe id='انميفوراب1-episode-iframe' src='" . $result['VIDEOURL'] . "' frameborder='0' allowfullscreen=''></iframe> ";

                    //echo "<td> 
                    //<div class='movie-infos'> 
                    // <img src='".$result['IMAGEURL'] ."'></td>";

                    // echo "<a href=''class='rd' > ep</a>";
                    //echo "<td> 
                    //<div class='movie-infos'> 
                    // <img src='".$result['IMAGEURL'] ."'></td>";
                    echo '
                    <div class="page-btns">


                    ';
                }
            } else {
                echo "<p>عفوا لايوجد نتائج بحث</p>";
            }
            // }else{
            //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
        }
        ?>
        <?php
        $searchResult = $database->prepare("SELECT max(NAME) from episodetv_info where SID =:SID");
        $searchResult->bindParam("SID", $result['SID']);
        $searchResult->execute();
        $maxEP = $searchResult->fetchColumn();

        if ($result['NAME'] + 1 <= $maxEP) {
            $searchResult = $database->prepare("SELECT * FROM episodetv_info WHERE SID=:SID AND NAME  = :name +1");
            $searchResult->bindParam("SID", $result['SID']);
            $searchResult->bindParam("name", $result['NAME']);
            $searchResult->execute();
            echo '<table class="table mt-3">';
            echo  "<tr>";

            foreach ($searchResult as $result1) {
                echo '
       
                <a href="ws.php?search=' . $result1['ID'] . '&searchBtn=" class="btn btn-hover">
                <i class="bx bxs-right-arrow"></i>
                  <span>الحلقه التالية</span>
                         </a>
                    ';
            }
        }
        echo '
             
        <a href="series.php?search=' . $result['SID'] . '&searchBtn=" class="btn btn-hover">
        <i class="bx bxs-right-arrow"></i>
          <span>الحلقات</span>
                 </a>
           ';

        if ($result['NAME'] - 1 >= 1) {
            $searchResult = $database->prepare("SELECT * FROM episodetv_info WHERE SID=:SID AND NAME  = :name -1");
            $searchResult->bindParam("SID", $result['SID']);
            $searchResult->bindParam("name", $result['NAME']);
            $searchResult->execute();
            echo '<table class="table mt-3">';
            echo  "<tr>";

            foreach ($searchResult as $result2) {
                echo '
       
                <a href="ws.php?search=' . $result2['ID'] . '&searchBtn=" class="btn btn-hover">
                <i class="bx bxs-right-arrow"></i>
                  <span>الحلقه السابقة</span>
                         </a>
                     </div>
                ';
            }
        }
        ?>


        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        <!-- APP SCRIPT -->
        <script src="../js/app.js"></script>

        <script type="text/javascript" src="https://ww.anime4up.com/wp-content/plugins/disqus-comment-system/public/js/comment_count.js?ver=3.0.21" id="disqus_count-js"></script>
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
        <script type="text/javascript" src="https://ww.anime4up.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=3.0.21" id="disqus_embed-js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" id="script-js"></script>
        <script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/bootstrap.min.js" id="bootstrap_script-js"></script>
        <script type="text/javascript" id="theme_script-js-extra">
            /* <![CDATA[ */
            var theme_data_array = {
                "theme_dir": "https:\/\/ww.anime4up.com\/wp-content\/themes\/Anime-Online-Theme-V3",
                "light_theme_time": "1615554236",
                "dark_theme_time": "1615554236"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/theme-scripts.min.js?ver=1615554236" id="theme_script-js"></script>
        <script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js" id="mCustomScrollbar_script-js"></script>
        <script type="text/javascript" src="https://c0.wp.com/c/5.7.2/wp-includes/js/wp-embed.min.js" id="wp-embed-js">
        </script>
        <script type="text/javascript" src="https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=5.7.2" async="async" id="remote_sdk-js"></script>
        <iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe"></iframe>


    </body>

</html>