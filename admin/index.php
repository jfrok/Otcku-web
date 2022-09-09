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
$poliNews = "SELECT * FROM movies_info where USER_ID = " . $_SESSION['user']->ID . "";
$resultp = $conn->query($poliNews);
$countp = $resultp->num_rows;

$sportNews = "SELECT * FROM Disny ";
$results = $conn->query($sportNews);
$counts = $results->num_rows;

$inco = "SELECT * FROM Disny where USER_ID = " . $_SESSION['user']->ID . "";
$resulti = $conn->query($inco);
$countd = $resulti->num_rows;

$inco = "SELECT * FROM movies_info WHERE SID = '2'";
$resulti = $conn->query($inco);
$counti = $resulti->num_rows;

$news = "SELECT * FROM movies_info";
$result = $conn->query($news);
$count = $result->num_rows;

$usersc = "SELECT * FROM users";
$resultu = $conn->query($usersc);
$countu = $resultu->num_rows;

$users = "SELECT * FROM users order by ID desc limit 7";
$result2 = $conn->query($users);
$count2 = $result2->num_rows;

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
                <h1><?php echo $countp + $countd; ?></h1>
                <h3>You Added</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?php echo $counts;
                    ?></h1>
                <h3>Disney Movies</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?php echo  $count;
                    ?></h1>
                <h3> Movies</h3>
            </div>
            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?php echo $count + $counts;
                    ?></h1>
                <h3>Totaal Movies</h3>
            </div>

            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1><?php echo $countu;
                    ?></h1>
                <h3>Totaal Users</h3>
            </div>

            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
    </div>

    <div class="content-2">
        <div class="recent-payments">
            <div class="title">
                <h2>Recent Published</h2>
                <!-- <a href="#" class="btn">View All</a> -->
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

                $sqlUser =  "SELECT s.UR_NAME,e.NAME,e.ID,e.RATE,e.USER_ID,e.ADD_DATE FROM movies_info e INNER JOIN users s ON e.USER_ID = s.ID ORDER BY e.ID desc LIMIT 8";
                //   $sqlUser =  "SELECT s.UR_NAME,e.NAME,e.ID,e.RATE,e.USER_ID,e.ADD_DATE FROM movies_info e INNER JOIN users s ON e.USER_ID = s.ID ORDER BY e.ID desc LIMIT 8";

                $publisher = $_SESSION['user']->ID;;
                //echo $_SESSION['user']->ur_name;
                $result =    mysqli_query($conn, $sqlUser);
                while ($row = $result->fetch_array()) {
                    echo '<tr>
         <td>' . $row['UR_NAME'] . '</td>
                <td>' . $row['NAME'] . '</td>
                <td>' . $row['ADD_DATE'] . '</td>
                <td><a href="../inc/trilar?search=' . $row["NAME"] . '&searchBtn=" class="btn">View</a></td>
                ';
                    // if ($publisher === $row["USER_ID"]) {
                    //     if ($row["ID"] === $row["ID"]) {

                    echo '<td><form method="POST"><button typy="submit" name="edit-new" value="' . $row["ID"] . '" class="btn">Edit</button><form></td>
                  <td><form method="POST"><button typy="submit" name="delete" value="' . $row["ID"] . '" class="btn">Delete</button><form></td>';
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
        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <h2>Recent Published</h2>
                    <!-- <a href="#" class="btn">View All</a> -->
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

                    $sqlUser =  "SELECT s.UR_NAME,e.NAME,e.ID,e.RATE,e.USER_ID,e.ADD_DATE FROM Disny e INNER JOIN users s ON e.USER_ID = s.ID ORDER BY e.ID desc LIMIT 8";
                    //   $sqlUser =  "SELECT s.UR_NAME,e.NAME,e.ID,e.RATE,e.USER_ID,e.ADD_DATE FROM movies_info e INNER JOIN users s ON e.USER_ID = s.ID ORDER BY e.ID desc LIMIT 8";

                    $publisher = $_SESSION['user']->ID;;
                    //echo $_SESSION['user']->ur_name;
                    $result =    mysqli_query($conn, $sqlUser);
                    while ($row = $result->fetch_array()) {
                        echo '<tr>
         <td>' . $row['UR_NAME'] . '</td>
                <td>' . $row['NAME'] . '</td>
                <td>' . $row['ADD_DATE'] . '</td>
                <td><a href="../inc/trilarA?search=' . $row["NAME"] . '&searchBtn=" class="btn">View</a></td>
                ';
                        // if ($publisher === $row["USER_ID"]) {
                        //     if ($row["ID"] === $row["ID"]) {

                        echo '<td><form method="POST"><button typy="submit" name="edit-new" value="' . $row["ID"] . '" class="btn">Edit</button><form></td>
                  <td><form method="POST"><button typy="submit" name="delete" value="' . $row["ID"] . '" class="btn">Delete</button><form></td>';
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
            <div class="new-students">
                <div class="title">
                    <h2>New Users</h2>
                    <a href="mangeusers.php?search=&searchBtn=Search" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    while ($show = $result2->fetch_array()) {
                        echo '
              <tr>';
                        if (!empty($show['AVATAR'])) {


                            echo '
                                <td><img src="../file/' . $show['AVATAR'] . '" alt="" /></td>
                        ';
                        } else {
                            echo '<td>No avatar</td>';
                        }
                        echo ' <td>' . $show['UR_NAME'] . '</td>
                    <td><form method="POST"><button typy="submit" name="edit-user" value="' . $show["ID"] . '" class="btn">Edit</button><form></td>
                <td><img src="info.png" alt="" /></td>
              </tr>';
                    }
                    echo '</tr>';
                    ?>

                    <!-- <tr>
                <td><img src="user.png" alt="" /></td>
                <td>John Steve Doe</td>
                <td><img src="info.png" alt="" /></td>
              </tr>
              <tr>
                <td><img src="user.png" alt="" /></td>
                <td>John Steve Doe</td>
                <td><img src="info.png" alt="" /></td>
              </tr>
              <tr>
                <td><img src="user.png" alt="" /></td>
                <td>John Steve Doe</td>
                <td><img src="info.png" alt="" /></td>
              </tr> -->

                </table>

            </div>
        </div>
    </div>


    </body>

    </html>