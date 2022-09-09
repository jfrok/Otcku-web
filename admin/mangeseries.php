<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'auth.php';
include '../db_conn.php';
?>
<?php
//query to get and count total item,order,user,feedback

$sportNews = "SELECT * FROM tvshow ";
$results = $conn->query($sportNews);
$counts = $results->num_rows;
//   $newsLines = "SELECT * FROM newslines";
// 	$linesResult = $con_db->query($newsLines);
// $lines = $linesResult->fetch_array()
?>
<?php
include 'header.php';
include 'popup.php';
include 'edit-popup.php';

?>

</div>
</div>
</div>
</div>
<div class="content">
    <div class="cards">
        <div class="card">
            <div class="box">
                <h1><?php echo $counts;
                    ?></h1>
                <h3>Series</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
        <!-- <div class="card">
            <div class="box">
                <h1><?php // echo $counts;
                    ?></h1>
                <h3>Disney Movies</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div> -->
        <!-- </div> -->
        <!-- <div class="card">
            <div class="box">
                <h1><?php //echo  $counti;
                    ?></h1>
                <h3>Comedy Movies</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div> -->
        <!-- <div class="card">
            <div class="box">
                <h1><?php //echo $count + $counts;
                    ?></h1>
                <h3>Totaal</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div> -->
    </div>

    <div class="content-2">
        <div class="recent-payments">
            <div class="title">
                <h2>Recent Published</h2>
                <form><button type="submit" class="btn">Add Series</button></form>
            </div>

            <table>
                <tr>
                    <th>Publisher</th>
                    <th>Title</th>
                    <th>Time</th>
                    <th>Option</th>
                    <th>Option</th>
                    <th>Option</th>
                </tr>



                <?php

                $sqlSeries =  "SELECT * FROM tvshow ORDER BY ID desc LIMIT 10";

                $publisher = $_SESSION['user']->ID;
                //echo $_SESSION['user']->ur_name;
                $result =    mysqli_query($conn, $sqlSeries);
                while ($row = $result->fetch_array()) {
                    echo '<tr>
         <td>' . $row['USER_ID'] . '</td>
                <td>' . $row['TV_NAME'] . '</td>
                <td>' . $row['ADD_DATE'] . '</td>
                <td><a href="../inc/seriesw.php?search=' . $row["TV_NAME"] . '&searchBtn=" class="btn">View</a></td>
                ';
                    // if ($publisher === $row["USER_ID"]) {
                    //     if ($row["ID"] === $row["ID"]) {

                    echo '<td><form method="POST"><button typy="submit" name="edit-series" value="' . $row["ID"] . '" class="btn">Edit</button><form></td>
                  <td><form method="POST"><button typy="submit" name="delete-series" value="' . $row["ID"] . '" class="btn">Delete</button><form></td>';
                    //                     } else {
                    //                         echo '
                    //    <div class="overlay overlay-edit">
                    //      <div class="popup">
                    //        <a class="close" href="index.php">&times;</a>
                    //        <div class="content">
                    //          <h2>u can,t change fucking that</h2>
                    //        </div>
                    //      </div>
                    //    </div>
                    //  ';
                    //                         exit(" ");
                    //                     }
                    //                 }

                    echo '
              </tr>
          ';
                }

                ?>
            </table>

        </div>
        </body>

        </html>