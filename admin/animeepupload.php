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

$sportNews = "SELECT * FROM movies_info where USER_ID = " . $_SESSION['user']->ID . "";
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
                <h3>You Added</h3>
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
    <?php
    require_once '../connectToDatabase.php';
    $moviesName = $database->prepare("SELECT * FROM series");
    $moviesName->execute();
    if ($moviesName->rowCount() > 0) {
        $rows  = $moviesName->fetchAll();
        $html = '<select name="sid" id="sid">';
        foreach ($rows as $row) {
            $html = $html . '<option value="' . $row['ID'] . '">' . $row['SR_NAME'] . '</option>';
        };
        $html = $html . '</select>';
    }

    ?>
    <div class="upload-form-out">

        <div class="upload-form">

            <form method="POST" class="center">

                <h3>Name</h3>
                <input class="anime-form-input" type="text" name="name" required />

                <!--<div class="font-weight-bold">Global Rate</div>
<input class="form-control" type="text" name="rate" />-->


                <h3>Imageurl </h3>
                <input class="anime-form-input" type="text" name="imageurl" required />

                <!--<div class="font-weight-bold">Server </div>
<input class="form-control" type="text" name="server" />-->


                <h3>Videourl </h3>
                <input class="anime-form-input" type="text" name="videourl" required />
                <br>
                <br>
                <h4>S1name </h4>
                <input class="anime-form-input" type="text" name="sonename" required />


                <div class="">server1 </div>
                <input class="anime-form-input" type="text" name="doodstream" required />
                <br>
                <h4>S2name </h4>
                <input class="anime-form-input" type="text" name="stoname" required />


                <div class="">server2 </div>
                <input class="anime-form-input" type="text" name="forshared" required />
                <br>
                <h4>S3name </h4>
                <input class="anime-form-input" type="text" name="sthreename" required />


                <div class="">server3 </div>
                <input class="anime-form-input" type="text" name="uqload" required />
                <br>
                <h4>S4name </h4>
                <input class="anime-form-input" type="text" name="sfourname" />


                <div class="">server4</div>
                <input class="anime-form-input" type="text" name="mpupload" />
                <br>
                <h4>S5name </h4>
                <input class="anime-form-input" type="text" name="sfivename" />


                <div class="">server5 </div>
                <input class="anime-form-input" type="text" name="solidfiles" />
                <br>
                <!--<div class="font-weight-bold">S6name </div>
<input class="form-control" type="text" name="ssixname" />


<div class="font-weight-bold">server6 </div>
<input class="form-control" type="text" name="solidfiles" />
-->
                <div class="">type </div>
                <div class="grid-left">
                    <?php echo $html; ?>
                </div>

                <br>
                <button class="btn" type="submit" name="upload">Upload</button>
                <br>
            </form>
        </div>
    </div>
    <div class="content-2">
        <div class="recent-payments">
            <div class="title">
                <h2>Recent Published</h2>
                <form><button type="submit" class="btn">Add Disney M</button></form>
            </div>

            <table>
                <tr>
                    <th>Publisher</th>
                    <th>Title</th>
                    <th>Title</th>
                    <th>Time</th>
                    <th>Option</th>
                    <th>Option</th>
                    <th>Option</th>
                </tr>



                <?php
                //SELECT e.NAME,e.ID,e.IMAGEURL,e.RATE FROM `episode_info` e INNER JOIN series s ON e.SID = s.ID WHERE s.SR_NAME ='$searchValue' order by ID asc
                $sqlUser =  "SELECT s.SR_NAME,e.NAME,e.ID,e.IMAGEURL,e.RATE,e.ADD_DATE,e.SID,e.USER_ID FROM episode_info e INNER JOIN series s ON e.SID = s.ID ORDER BY e.ID desc LIMIT 10";

                //$publisher = $_SESSION['user']->ID;;
                //echo $_SESSION['user']->ur_name;
                $result =    mysqli_query($conn, $sqlUser);
                while ($row = $result->fetch_array()) {
                    echo '<tr>
                    <td>' . $row['USER_ID'] . '</td>
         <td>' . $row['SR_NAME'] . '</td>
                <td>episode' . $row['NAME'] . '</td>
                <td>' . $row['ADD_DATE'] . '</td>
                <td><a href="../inc/we?search=' . $row["ID"] . '&searchBtn=" class="btn">View</a></td>
                ';
                    // if ($publisher === $row["USER_ID"]) {
                    //     if ($row["ID"] === $row["ID"]) {

                    echo '<td><form method="POST"><button typy="submit" name="edit-disney" value="' . $row["ID"] . '" class="btn">Edit</button><form></td>
                      <td><form method="POST"><button typy="submit" name="delete-anime-ep" value="' . $row["ID"] . '" class="btn">Delete</button><form></td>';
                    //     } else {
                    //         echo '
                    //    <div class="overlay overlay-edit">
                    //      <div class="popup">
                    //        <a class="close" href="index">&times;</a>
                    //        <div class="content">
                    //          <h2>u can,t change fucking that</h2>
                    //        </div>
                    //      </div>
                    //    </div>
                    //  ';
                    //         exit(" ");
                    //     }
                    // }

                    echo '
              </tr>
          ';
                }

                ?>
            </table>

        </div>
        </body>

        </html>