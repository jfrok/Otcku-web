<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require_once 'header.php';
require_once '../db_conn.php';
?>


<style>
    body {
        overflow-x: hidden;
    }

    .mimges {
        width: 200px;
        left: 0;
        top: 0;
        float: right;
        margin: 30px;
        position: relative;
    }

    .contaniers {
        left: 20%;
        right: 10%;
        position: relative;
    }

    .movie-item-titles {
        font-size: 15PX;
    }

    .erorrs {
        top: 250px;
        position: relative;
        overflow: hidden;
        left: 700px;
        font-size: 29px;
    }


    @media screen and (max-width: 1280px) {

        .erorrs {
            top: 200px;
            position: relative;
            overflow: hidden;
            left: 130px;
            font-size: 19px;
        }

        .mimges {
            width: 120px;
            left: 0;
            top: 0;
            float: right;
            margin: 20px;
            position: relative;
        }

        .movie-item-titles {
            font-size: 10PX;
        }
    }
</style>

<?php
//SELECT ID,NAME,IMAGEURL,RATE FROM series WHERE NAME LIKE :name UNION SELECT ID,NAME,IMAGEURL,RATE FROM movies_info WHERE NAME LIKE:name UNION SELECT ID,NAME,IMAGEURL,RATE FROM tvshow WHERE NAME LIKE:name



if (isset($_GET['search'])) {
    if (!empty($_GET['search'])) {


        //combining keyword function
        $condition = '';
        $conditionTV = '';
        $conditionSR = '';
        $query = explode(" ", $_GET["search"]);

        foreach ($query as $text) {

            $condition .= "NAME LIKE '%" . mysqli_real_escape_string($conn, $text) . "%' OR ";
        }
        foreach ($query as $text) {

            $conditionTV .= "TV_NAME LIKE '%" . mysqli_real_escape_string($conn, $text) . "%' OR ";
        }
        foreach ($query as $text) {

            $conditionSR .= "SR_NAME LIKE '%" . mysqli_real_escape_string($conn, $text) . "%' OR ";
        }
        $condition = substr($condition, 0, -4);

        $conditionTV = substr($condition, 0, -4);
        $conditionSR = substr($condition, 0, -4);

        //get item based on value from text form
        $sql = "SELECT NAME, IMAGEURL, ID, RATE FROM movies_info UNION
        SELECT NAME, IMAGEURL, ID, RATE FROM Disny WHERE NAME LIKE " . '$query';
        $results = $conn->query($sql);
        // $check = $results->num_rows;

        // $results = $conn->query($searchResult);


        //if ($check > 0) {


        foreach ($results as $result) {
            // echo "<h1> ".$result['NAME'] ."</h1>";
            echo '
       
<div class="mimges">
         <div class="movie-item">         
         <a href="./trilar?search=' . $result['NAME'] . '&searchBtn="> <img src=' . $result['IMAGEURL'] . '>    
            <div class="movie-item-content">
       <div class="movie-item-titles">
      ' . $result['NAME'] . '
      <div class="movie-info">
             <i class="bx bxs-star"></i>
                 <span>Global Rate ' . $result['RATE'] . '</span>
         
               </div>
            </div>   
          </div>
        </div>
      </div>
     
    </a>';
        }
        echo '</div>
      </div>';


        //             //get item based on value from text form
        //             $sqlT = "SELECT * FROM tvshow WHERE " . $conditionTV;
        //             $resultsT = $conn->query($sqlT);
        //             //   $check = $results->num_rows;

        //             // $results = $conn->query($searchResult);


        //             //  if($check > 0){


        //             foreach ($resultsT as $result) {
        //                 // echo "<h1> ".$result['NAME'] ."</h1>";
        //                 echo '

        // <div class="mimges">
        //         <div class="movie-item">         
        //         <a href="./seriesw?search=' . $result['TV_NAME'] . '&searchBtn="> <img src=' . $result['IMAGEURL'] . '>    
        //            <div class="movie-item-content">
        //       <div class="movie-item-titles">
        //      ' . $result['TV_NAME'] . '
        //      <div class="movie-info">
        //             <i class="bx bxs-star"></i>
        //                 <span>Global Rate ' . $result['RATE'] . '</span>

        //               </div>
        //            </div>   
        //          </div>
        //        </div>
        //      </div>

        //    </a>';
        //             }
        //             echo '</div>
        //      </div>';

        //             //get item based on value from text form
        //             $sql = "SELECT * FROM series WHERE " . $conditionSR;
        //             $results = $conn->query($sql);
        //             //   $check = $results->num_rows;

        //             // $results = $conn->query($searchResult);


        //             //  if($check > 0){


        //             foreach ($results as $result) {
        //                 // echo "<h1> ".$result['NAME'] ."</h1>";
        //                 echo '

        //   <div class="mimges">
        //           <div class="movie-item">         
        //           <a href="./anime?search=' . $result['SR_NAME'] . '&searchBtn="> <img src=' . $result['IMAGEURL'] . '>    
        //              <div class="movie-item-content">
        //         <div class="movie-item-titles">
        //        ' . $result['SR_NAME'] . '
        //        <div class="movie-info">
        //               <i class="bx bxs-star"></i>
        //                   <span>Global Rate ' . $result['RATE'] . '</span>

        //                 </div>
        //              </div>   
        //            </div>
        //          </div>
        //        </div>

        //      </a>';
        //             }
        //             echo '</div>
        //        </div>';

        //             //get item based on value from text form
        //             $sql = "SELECT * FROM Disny WHERE " . $condition;
        //             $results = $conn->query($sql);
        //             $check = $results->num_rows;

        //             // $results = $conn->query($searchResult);


        //             //  if($check > 0){


        //             foreach ($results as $result) {
        //                 // echo "<h1> ".$result['NAME'] ."</h1>";
        //                 echo '

        // <div class="mimges">
        //     <div class="movie-item">         
        //     <a href="./trilarA?search=' . $result['NAME'] . '&searchBtn="> <img src=' . $result['IMAGEURL'] . '>    
        //        <div class="movie-item-content">
        //   <div class="movie-item-titles">
        //  ' . $result['NAME'] . '
        //  <div class="movie-info">
        //         <i class="bx bxs-star"></i>
        //             <span>Global Rate ' . $result['RATE'] . '</span>

        //           </div>
        //        </div>   
        //      </div>
        //    </div>
        //  </div>

        // </a>';
        //             }
        echo '</div>
 </div>';
    } else {
        echo '
		<div class="body-main">
			<div class="wrap">
				<h1 class="content-title">404 - Page Not Found</h1>
				<hr>
				<br><br>
				<div class="single-content contact-us">
					<h3 style="text-align:center;width:100%;">Sorry, we couldn&apos;t find the page you&apos;re looking for.</h3>
				</div>
				<br>
			</div>
		</div>
	';
    }
    // }
}
// }
?>


<!-- SCRIPT -->
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<!-- APP SCRIPT -->
<script src="../js/app.js"></script>


</body>

</html>