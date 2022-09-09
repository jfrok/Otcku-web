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

$usersc = "SELECT * FROM users";
$resultu = $conn->query($usersc);
$countu = $resultu->num_rows;

// $users = "SELECT * FROM users order by ID desc limit 7";
// $result2 = $conn->query($users);
// $count2 = $result2->num_rows;

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
                <h1><?php echo $countu;
                    ?></h1>
                <h3>Totaal Users</h3>
            </div>

            <div class="icon-case">
                <img src="https://i.postimg.cc/rFTDXtsh/teachers.png" alt="" />
            </div>
        </div>
    </div>
    <?php


    // if (isset($_GET['searchBtn'])) {


    // $searchResult = $database->prepare("SELECT * FROM users WHERE UR_NAME LIKE :name OR EMAIL LIKE :email");
    // $searchValue = "%" . $_GET['search'] . "%";
    // $searchResult->bindParam("name", $searchValue);
    // $searchResult->bindParam("email", $searchValue);
    // $searchResult->execute();
    // // echo '<table>';
    // // echo  "<tr>";
    // // echo "<th> الأسم</th>";
    // // echo "<th> الإيميل</th>";
    // // echo "<th> الحذف</th>";
    // // echo "<th> تعديل</th>";
    // // echo  "<tr>";
    // foreach ($searchResult as $result) {
    //     echo  "<tr>";
    //     echo "<td> " . $result['UR_NAME'] . "</td>";
    //     echo "<td> " . $result['EMAIL'] . "</td>";

    echo '

<div class="content-2">
    <div class="recent-payments">
        <div class="title">
            <h2>Recent Published</h2>
            <a href="mangeusers.php?search=&searchBtn=Search" class="btn">View All</a>
        </div>

        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Id</th>
                <th>Age</th>
                <th>Option</th>
                <th>Option</th>
               
            </tr>
';

    if (isset($_GET['search'])) {
        // if (!empty($_GET['search'])) {


        //combining keyword function
        $condition = '';
        $query = explode(" ", $_GET["search"]);

        foreach ($query as $text) {

            $condition .= "UR_NAME LIKE '%" . mysqli_real_escape_string($conn, $text) . "%' OR ";
        }

        $condition = substr($condition, 0, -4);

        //get item based on value from text form
        $sql = "SELECT * FROM users WHERE " . $condition . "order by ID desc";
        $results = $conn->query($sql);
        $check = $results->num_rows;

        // $results = $conn->query($searchResult);


        if ($check > 0) {



            foreach ($results as $result) {
                echo '<tr>
                <td>' . $result['UR_NAME'] . '</td>
                <td>' . $result['EMAIL'] . '</td>
                <td>' . $result['ID'] . '</td>
                <td>' . $result['AGE'] . '</td>
                
        '; // if ($publisher===$row["USER_ID"]) { // if ($row["ID"]===$row["ID"]) {
                echo '<td><form method="POST"><button typy="submit" name="edit-user" value="' . $result["ID"] . '" class="btn">Edit</button><form></td>
          <td><form method="POST"><button typy="submit" name="delete-user" value="' . $result["ID"]
                    . '" class="btn">Delete</button><form></td>'; // } else { // echo '
                //    <div class="overlay overlay-edit">
                //      <div class="popup">
                //        <a class="close" href="index.php">&times;</a>
                //        <div class="content">
                //          <h2>u can,t change fucking that</h2>
                //        </div>
                //      </div>
                //    </div>
                //  ' ; // exit(" ");
                //                     }
                //                 }
            }
            echo '
      </tr>
  ';
            echo "
  <tr>";
            // }
            echo '
</table>';
            // }
        }
    }


    ?>
    </table>

</div>
</body>

</html>