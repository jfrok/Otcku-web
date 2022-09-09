
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
#main-content{
    max-width: 800px;
    margin: 0 auto;
    padding: 100px 0 0;
}
.responsive{
    width: 100%;
    height: 900px;
    right: 0;
    padding-bottom: 56.25%;
    position: relative;
}
.responsive iframe{
    position: relative;
    width: 100%;
    height: 100%;
}
h1{
    top: 270px;
    position: absolute;
    right: 0;
    left: 0px;
}
/*.story{
    top: 700px;
    position: absolute;
    color: #FFC100;
    left: 0;
    right: 0;
    
}*/
.textS{
    position: relative;
    top: 0;
    left: 0;
}
.date{
    top: 100px;
    position: absolute;
    color: #B22B2B;
}
.rate{
    top: 120px;
    margin: 7px;
    position: absolute;
    color: #FFA200;  
}
.HD{
    top: 155px;
    padding: 10px;
    margin: 7px;
    position: absolute;
    color: #46FF00;  
}
.rp{
    top: 830px;
    left: 310px;
    color: red;
    position: absolute;
}
.rd{
    top: 800px;
    left: 0px;
    right: 0px;
    color: gold;
    position: absolute;
}
@media screen and (max-width: 680px){

#main-content{
max-width: 800px;
margin: 0 auto;
padding: 100px 0 0;
}
.responsive{
width: 100%;
height: 500px;
right: 0;
padding-bottom: 56.25%;
position: relative;
}
.responsive iframe{
position: relative;
width: 100%;
height: 100%;
}
.rp{
    top: 575px;
    left: 10px;
    color: red;
    position: absolute;
}
.rd{
    top: 490px;
    left: 0px;
    right: 0px;
    color: gold;
    position: absolute;
}
h1{
    top: 220px;
    position: absolute;
    right: 0;
    left: 0px;
    font-size: 15px;
}
}
</style>
<style>

ul {
   
    list-style: none;
    
}
.btns1{
right: 500px;
top: 400px;
position: relative;
text-decoration: none;
cursor: pointer;
color: red;
}
@media screen and (max-width: 1080px){

.btns1{
right: 0px;
top: 0px;
text-decoration: none;
clear: both;
float: right;
cursor: pointer;
position: relative;
color: red;
}

}
</style>

<?php 

session_start();
require_once '../connectToDatabase.php';
?>
<body>
<?php require_once 'headerW.php'; ?>
    
    <!-- END NAV -->
    
    <!-- HERO SECTION -->
    <div class="hero-section">
        </div>
        <div>  
<?php

        if(isset($_GET['searchBtn']) and isset($_GET['search'])){
    if($_GET['search'] !=""){
        $searchResult = $database->prepare("SELECT * FROM Disny WHERE ID = :name");
        $searchValue = $_GET['search'];
        $searchResult->bindParam("name",$searchValue);
        $searchResult->execute();
        echo '<table class="table mt-3">';
        echo  "<tr>";
        
        foreach($searchResult AS $result){
            echo  "<tr>";
            echo  "<tr>";
            echo ' <div class="col-md-12 col-sm-12 col-no-padding-left">
            </div>
            <div class="col-md-9 col-md-push-3 col-sm-12">
            
            <div id="episode-watch-content" class="tab-content">
            <div class="tab-pane fade in active" id="انميفوراب1">
            <div class="hardsub-content">
            
            <ul class="btns1" id="episode-servers">
            <li>
            <li><a id="انميفوراب-4shared-2" data-ep-url="'.$result['FORSHARED'].'">سيرفر1</a></li>
            <li><a id="انميفوراب-doodstream-6" data-ep-url="'.$result['DOODSTREAM'].'">سيرفر2</a></li>
            <li><a id="انميفوراب-uqload-7" data-ep-url="'.$result['UQLOAD'].'">سيرفر3</a></li>
            
            </div>
            </div>
            </div>
            </div>';
          
          echo "<div class='btns'>
           <div id='main-doc-body'>
           <div id='main-content'>
               <div class='responsive'>
               <iframe id='انميفوراب1-episode-iframe' src='".$result['VIDEOURL'] ."' frameborder='0' allowfullscreen=''></iframe> ";
           
            //echo "<td> 
            //<div class='movie-infos'> 
           // <img src='".$result['IMAGEURL'] ."'></td>";
           echo  '<div class="c">';
          echo  "<tr>";
            echo "<h1> ".$result['NAME'] ."</h1>";
         //  echo "<h3 class='story'>".$result['STORY'] ."</h3>";
          // echo "<h3 class='date'> ".$result['DATE'] ."</h3>";
          // echo "<h3 class='rate'> ".$result['RATE'] ."</h3>";
          // echo "<h3 class='HD'>Views".' '. $_SESSION['view']." </h3>";
 echo "<a href='../contactus.php'class='rp' >بلاغ عن مشكله</a>";
// echo "<a href='". $result['DWM']."'class='rd' >". $result['DWM']."</a>";
          

        }    
        }else{
         echo "<p>عفوا لايوجد نتائج بحث</p>";
        }
   // }else{
    //    echo "<p>يالاههههوييييييي يوجد خطا</p>";
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
var embedVars = {"disqusConfig":{"integration":"wordpress 3.0.21"},"disqusIdentifier":"16824 https:\/\/ww.anime4up.com\/?post_type=episode&p=16824","disqusShortname":"anime4up1","disqusTitle":"One Piece \u0627\u0644\u062d\u0644\u0642\u0629 974","disqusUrl":"https:\/\/ww.anime4up.com\/episode\/one-piece-%d8%a7%d9%84%d8%ad%d9%84%d9%82%d8%a9-974\/","postId":"16824"};
/* ]]> */
</script>
<script type="text/javascript" src="https://ww.anime4up.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=3.0.21" id="disqus_embed-js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" id="script-js"></script>
<script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/bootstrap.min.js" id="bootstrap_script-js"></script>
<script type="text/javascript" id="theme_script-js-extra">
/* <![CDATA[ */
var theme_data_array = {"theme_dir":"https:\/\/ww.anime4up.com\/wp-content\/themes\/Anime-Online-Theme-V3","light_theme_time":"1615554236","dark_theme_time":"1615554236"};
/* ]]> */
</script>
<script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/js/theme-scripts.min.js?ver=1615554236" id="theme_script-js"></script>
<script type="text/javascript" src="https://ww.anime4up.com/wp-content/themes/Anime-Online-Theme-V3/assets/vendors/scrollbar/jquery.mCustomScrollbar.concat.min.js" id="mCustomScrollbar_script-js"></script>
<script type="text/javascript" src="https://c0.wp.com/c/5.7.2/wp-includes/js/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript" src="https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=5.7.2" async="async" id="remote_sdk-js"></script>




<?php require_once 'ads.php'; ?>
  
</body>

</html>