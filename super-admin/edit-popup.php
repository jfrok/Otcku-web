<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- //<input type="hidden" value="'.$_SESSION['user']->ur_id.'" name="publisherid" reuqired> -->

<?php
if (isset($_POST['edit-new'])) {



    // include '../config.php';
    //display item
    //     $categorysql = "SELECT * FROM category";
    //     $result =  $con_db->query($categorysql);
    // $verify = $result->num_rows;
    // if ($verify > 0) {

    //   $rows  = $result->fetch_all();
    //   //$html = '<select name="category" id="category">';
    //   foreach ($rows as $row) {
    //     // $html = $html . '<option value="' . $row['id'] . '">
    //     echo $row['ca_name'];
    //   };
    //  // $html = $html . '</select>';
    // }
    // require_once '../connectToDatabase.php';
    // $moviesName = $database->prepare("SELECT s.NAME, e.SID FROM `movies_info` e INNER JOIN filters s ON e.SID = s.ID WHERE s.ID = :filterName");
    // $moviesName->bindParam("filterName", $row['SID']);
    // $moviesName->execute();
    // if ($moviesName->rowCount() > 0) {
    //     $rows  = $moviesName->fetchAll();
    //     $html = '<select name="cato" id="sid">';
    //     foreach ($rows as $row) {
    //         $html = $html . '<option value="' . $row['SID'] . '">' . $row['NAME'] . '</option>';
    //     };
    //     $html = $html . '</select>';
    // }

    $editID = $_POST['edit-new'];


    $sqledit = "SELECT * FROM movies_info WHERE ID='$editID'";

    $show = $conn->query($sqledit);
    $edit = $show->fetch_array();


    // $filter = '<select name="cato">';

    // $filter = $filter;
    // if ($edit['SID'] == '1') {
    //     $filter . ' <option value="1">default</option>';
    // }
    // if ($edit['SID'] === '2') {
    //     $filter . '<option value="2">اكشن</option>';
    // }
    //     <option value="' . $edit['SID'] . '">' . $edit['SID'] . '</option>

    //   <option value="3">رعب</option>
    //   <option value="4">غموض</option>
    // 	  <option value="5">خيال علمي</option>
    //     <option value="6">كوميدي</option>
    //     <option value="7">دراما</option>
    //     <option value="8">رومانسي</option>
    //     <option value="9">مغامرات</option>
    //     <option value="10">افلام انيمي</option>
    //     <option value="11">قصه مثيره</option>';

    //$filter = $filter . '</select>';
    ////////////////////////////////////
    // $mark = '<select name="marked">';

    // $mark = $mark . '
    // <option value="' . $edit['ns_mark'] . '">' . $edit['ns_mark'] . '</option>
    //   <option value="defulat">none</option>
    //   <option value="HOT">HOT</option>';

    // $mark = $mark . '</select>';

    echo '
    <div class="overlay overlay-edit">
      <div class="popup item">
        <a class="close" href="index.php">&times;</a>
        <div class="content">
          <h2>Edit Movie</h2>
          <form   method="POST" enctype="multipart/form-data">
            <div class="grid-full">
              <p class="upload-pic-title">Upload Image : </p>
              <input type="file" class="upload-file-pic" name="my_image" >
              <h4>Image url :</h4>
                     <input type="text" value="' . $edit['IMAGEURL'] . '" name="imageurl" reuqired>
     				  <input type="hidden" value="' . $_SESSION['user']->ID . '" name="publisherid" reuqired>
            </div>
            <div class="grid-left">
            <h4> Name :</h4>
                 <input type="text" value="' . $edit['NAME'] . '" name="name" >
            </div>
            <div class="grid-right">
            <h4> Rate :</h4>
                <input type="text" value="' . $edit['RATE'] . '" name="rate" >
            </div>
            <div class="grid-right">
            <h4> Date :</h4>
                  <input type="text" value="' . $edit['DATE'] . '" name="date" >
                  </div>
            <div class="grid-right">
              ';
    echo '
              <select name="cato">';


    if ($edit['SID'] == '1') {
        echo ' <option value="1">default</option>
        <option value="2">اكشن</option>
                  <option value="3">رعب</option>
                  <option value="4">غموض</option>
                      <option value="5">خيال علمي</option>
                    <option value="6">كوميدي</option>
                    <option value="7">دراما</option>
                    <option value="9">رومانسي</option>
                    <option value="11">مغامرات</option>
                    <option value="13">افلام انيمي</option>
                    <option value="15">قصه مثيره</option>';
    } elseif ($edit['SID'] == '2') {
        echo '<option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '3') {
        echo '<option value="3">رعب</option>
        <option value="2">اكشن</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '4') {
        echo '<option value="4">غموض</option>
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="8">رومانسي</option>
          <option value="9">مغامرات</option>
          <option value="10">افلام انيمي</option>
          <option value="11">قصه مثيره</option>';
    }
    if ($edit['SID'] == '5') {
        echo '<option value="5">خيال علمي</option>
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="8">رومانسي</option>
          <option value="9">مغامرات</option>
          <option value="10">افلام انيمي</option>
          <option value="11">قصه مثيره</option>';
    }
    if ($edit['SID'] == '6') {
        echo '<option value="6">كوميدي</option> 
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '7') {
        echo '<option value="7">دراما</option> 
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }


    echo '</select>';
    // echo $html;

    echo '
             
              </div>
              <div class="grid-full">
                      <h4> Video url :</h4>
                      <input type="text" value="' . $edit['VIDEOURL'] . '" name="videourl" >
                      <br>
                      servers<br>
                      <input type="text" value="' . $edit['FORSHARED'] . '" name="server1" >
                      <input type="text" value="' . $edit['DOODSTREAM'] . '" name="server2" >
                      <input type="text" value="' . $edit['UQLOAD'] . '" name="server3" >
                    </div>
              <div class="grid-left">
              
                              <h4> Trailr :</h4>
                              <input type="text" value="' . $edit['TRAILR'] . '" name="trailr" >
                            </div>
                            <div class="grid-left">
                                              <h4>Story :</h4>
                                              <textarea rows="5" cols="42" name="story" >' . $edit['STORY'] . '</textarea>
                        
                                            </div>
                                            <br><br>
                                            <div class="grid-full">
                                              <button type="submit" class="btn-submit save-item-page" value="' . $edit['ID'] . '" name="edit-save">
                                                Save
                                              </button>
                                
            </div>
          </form>
        </div>
      </div>
    </div>';
} //sudo chmod 777 -R /opt/lampp/htdocs/newsweb/files/

//check form submission to add new item 
// $name = $_POST['name'];
// $date = $_POST['date'];
// $rate = $_POST['rate'];
// $trailr = $_POST['trailr'];

// $imageurl = $_POST['imageurl'];
// $videourl = $_POST['videourl'];
// $story = $_POST['story'];

// $server1 = $_POST['server1'];
// $server2 = $_POST['server2'];
// $server3 = $_POST['server3'];


// $cato = $_POST['cato'];

$name = isset($_POST['name']) ? $_POST['name'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$rate = isset($_POST['rate']) ? $_POST['rate'] : '';
$trailr = isset($_POST['trailr']) ? $_POST['trailr'] : '';
$imageurl = isset($_POST['imageurl']) ? $_POST['imageurl'] : '';
$videourl = isset($_POST['videourl']) ? $_POST['videourl'] : '';
$story = isset($_POST['story']) ? $_POST['story'] : '';
$server1 = isset($_POST['server1']) ? $_POST['server1'] : '';
$server2 = isset($_POST['server2']) ? $_POST['server2'] : '';
$server3 = isset($_POST['server3']) ? $_POST['server3'] : '';

$cato = isset($_POST['cato']) ? $_POST['cato'] : '';
//  $publisherid = $_POST['publisherid'];
// $marked = isset($_POST['marked']) ? $_POST['marked'] : '';

if (isset($_POST['edit-save'])) {
    include '../db_conn.php';

    $editID = $_POST['edit-save'];


    // echo "<pre>";
    // print_r($_FILES['my_image']);
    // echo "</pre>";

    // $img_name = $_FILES['my_image']['name'];
    // $img_size = $_FILES['my_image']['size'];
    // $tmp_name = $_FILES['my_image']['tmp_name'];
    // $error = $_FILES['my_image']['error'];

    // if ($error === 0) {
    //     if ($img_size > 1250000) {
    //         $em = "Sorry, your file is too large.";
    //         header("Location: index.php?error=$em");
    //     } else {
    //         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    //         $img_ex_lc = strtolower($img_ex);

    //         $allowed_exs = array("jpg", "jpeg", "png");

    //         if (in_array($img_ex_lc, $allowed_exs)) {
    //             $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
    //             $img_upload_path = '../files/' . $new_img_name;
    //             move_uploaded_file($tmp_name, $img_upload_path);

    //             //$my_image = $_POST['my_image'];



    //         } else {
    //             $em = "You can't upload files of this type";
    //             header("Location: index.php?error=$em");
    //         }
    //     }
    // } else {
    //     $em = "unknown error occurred!";
    //     //header("Location: index.php?error=$em");
    // }

    // if ($publisherid != $_SESSION['user']->ur_id) {
    //   echo'
    //   	<div class="overlay overlay-edit">
    //   		<div class="popup item2">
    //   			<a class="close" href="index.php">&times;</a>
    //   			<div class="content">
    //   				<h2>Failed</h2>
    //   				<p>You can,t change that</p>
    //   			</div>
    //   		</div>
    //   	</div>';

    //   exit(" ");
    // }
    //insert new item into database
    $sqlee = "UPDATE movies_info SET NAME='$name',DATE='$date',RATE='$rate',STORY='$story',IMAGEURL='$imageurl',TRAILR='$trailr',VIDEOURL='$videourl',FORSHARED='$server1',DOODSTREAM='$server2',UQLOAD='$server3',SID='$cato' WHERE ID='$editID'";


    //give success message
    if ($conn->query($sqlee) === TRUE) {

        echo '
						<div class="overlay overlay-edit">
							<div class="popup item2">
								<a class="close" href="index.php">&times;</a>
								<div class="content">
									<h2>Success</h2>
									<p>has been edited.</p>
								</div>
							</div>
						</div>
					';
    }
}
if (isset($_POST['delete'])) {

    $newsID = $_POST['delete'];

    $sqldelete = "DELETE FROM movies_info WHERE ID='$newsID'";

    //give success message
    if ($conn->query($sqldelete) === TRUE) {

        echo '
       <div class="overlay overlay-edit">
         <div class="popup">
           <a class="close" href="index.php">&times;</a>
           <div class="content">
             <h2>Success</h2>
             <p>Item deleted.</p>
           </div>
         </div>
       </div>
     ';
    }
}
// $sqlee = "UPDATE news SET ns_title='$title', ns_details='$details', ns_img='$new_img_name', ns_imgurl='$imgurl', ns_category='$cato', ns_mark='$marked', ns_description='$description' WHERE id='$editID'";

//echo print_r($sqlee) ;
if (isset($_POST['edit-disney'])) {


    $editID = $_POST['edit-disney'];


    $sqledit = "SELECT * FROM Disny WHERE ID='$editID'";

    $show = $conn->query($sqledit);
    $edit = $show->fetch_array();


    echo '
    <div class="overlay overlay-edit">
      <div class="popup item">
        <a class="close" href="disneyupload.php">&times;</a>
        <div class="content">
          <h2>Edit Movie</h2>
          <form   method="POST" enctype="multipart/form-data">
            <div class="grid-full">
              <p class="upload-pic-title">Upload Image : </p>
              <input type="file" class="upload-file-pic" name="my_image" >
              <h4>Image url :</h4>
                     <input type="text" value="' . $edit['IMAGEURL'] . '" name="imageurl" reuqired>
     				  <input type="hidden" value="' . $_SESSION['user']->ID . '" name="publisherid" reuqired>
            </div>
            <div class="grid-left">
            <h4> Name :</h4>
                 <input type="text" value="' . $edit['NAME'] . '" name="name" >
            </div>
            <div class="grid-right">
            <h4> Rate :</h4>
                <input type="text" value="' . $edit['RATE'] . '" name="rate" >
            </div>
            <div class="grid-right">
            <h4> Date :</h4>
                  <input type="text" value="' . $edit['DATE'] . '" name="date" >
                  </div>
            <div class="grid-right">
              ';
    echo '
              <select name="cato">';


    if ($edit['SID'] == '1') {
        echo ' <option value="1">default</option>
        <option value="2">اكشن</option>
                  <option value="3">رعب</option>
                  <option value="4">غموض</option>
                      <option value="5">خيال علمي</option>
                    <option value="6">كوميدي</option>
                    <option value="7">دراما</option>
                    <option value="9">رومانسي</option>
                    <option value="11">مغامرات</option>
                    <option value="13">افلام انيمي</option>
                    <option value="15">قصه مثيره</option>';
    } elseif ($edit['SID'] == '2') {
        echo '<option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '3') {
        echo '<option value="3">رعب</option>
        <option value="2">اكشن</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '4') {
        echo '<option value="4">غموض</option>
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="8">رومانسي</option>
          <option value="9">مغامرات</option>
          <option value="10">افلام انيمي</option>
          <option value="11">قصه مثيره</option>';
    }
    if ($edit['SID'] == '5') {
        echo '<option value="5">خيال علمي</option>
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
          <option value="6">كوميدي</option>
          <option value="7">دراما</option>
          <option value="8">رومانسي</option>
          <option value="9">مغامرات</option>
          <option value="10">افلام انيمي</option>
          <option value="11">قصه مثيره</option>';
    }
    if ($edit['SID'] == '6') {
        echo '<option value="6">كوميدي</option> 
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="7">دراما</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }
    if ($edit['SID'] == '7') {
        echo '<option value="7">دراما</option> 
        <option value="2">اكشن</option>
        <option value="3">رعب</option>
        <option value="4">غموض</option>
            <option value="5">خيال علمي</option>
          <option value="6">كوميدي</option>
          <option value="9">رومانسي</option>
          <option value="11">مغامرات</option>
          <option value="13">افلام انيمي</option>
          <option value="15">قصه مثيره</option>';
    }


    echo '</select>';
    // echo $html;

    echo '
             
              </div>
              <div class="grid-full">
                      <h4> Video url :</h4>
                      <input type="text" value="' . $edit['VIDEOURL'] . '" name="videourl" >
                      <br>
                      servers<br>
                      <input type="text" value="' . $edit['FORSHARED'] . '" name="server1" >
                      <input type="text" value="' . $edit['DOODSTREAM'] . '" name="server2" >
                      <input type="text" value="' . $edit['UQLOAD'] . '" name="server3" >
                    </div>
              <div class="grid-left">
              
                              <h4> Trailr :</h4>
                              <input type="text" value="' . $edit['TRAILR'] . '" name="trailr" >
                            </div>
                            <div class="grid-left">
                                              <h4>Story :</h4>
                                              <textarea rows="5" cols="42" name="story" >' . $edit['STORY'] . '</textarea>
                        
                                            </div>
                                            <br><br>
                                            <div class="grid-full">
                                              <button type="submit" class="btn-submit save-item-page" value="' . $edit['ID'] . '" name="edit-save-disney">
                                                Save
                                              </button>
                                
            </div>
          </form>
        </div>
      </div>
    </div>';
}
if (isset($_POST['edit-save-disney'])) {
    include '../db_conn.php';

    $editID = $_POST['edit-save-disney'];


    //insert new item into database
    $sqlee = "UPDATE Disny SET NAME='$name',DATE='$date',RATE='$rate',STORY='$story',IMAGEURL='$imageurl',TRAILR='$trailr',VIDEOURL='$videourl',FORSHARED='$server1',DOODSTREAM='$server2',UQLOAD='$server3',SID='$cato' WHERE ID='$editID'";


    //give success message
    if ($conn->query($sqlee) === TRUE) {

        echo '
						<div class="overlay overlay-edit">
							<div class="popup item2">
								<a class="close" href="disneyupload.php">&times;</a>
								<div class="content">
									<h2>Success</h2>
									<p>has been edited.</p>
								</div>
							</div>
						</div>
					';
    }
}
if (isset($_POST['delete-disney'])) {

    $newsID = $_POST['delete-disney'];

    $sqldelete = "DELETE FROM Disny WHERE ID='$newsID'";

    //give success message
    if ($conn->query($sqldelete) === TRUE) {

        echo '
       <div class="overlay overlay-edit">
         <div class="popup">
           <a class="close" href="disneyupload.php">&times;</a>
           <div class="content">
             <h2>Success</h2>
             <p>Item deleted.</p>
           </div>
         </div>
       </div>
     ';
    }
}
if (isset($_POST['delete-anime-ep'])) {

    $newsID = $_POST['delete-anime-ep'];

    $sqldelete = "DELETE FROM episode_info WHERE ID='$newsID'";

    //give success message
    if ($conn->query($sqldelete) === TRUE) {

        echo '
       <div class="overlay overlay-edit">
         <div class="popup">
           <a class="close" href="animeepupload.php">&times;</a>
           <div class="content">
             <h2>Success</h2>
             <p>Item deleted.</p>
           </div>
         </div>
       </div>
     ';
    }
}
if (isset($_POST['delete-series-ep'])) {

    $deletSerEp = $_POST['delete-series-ep'];

    $sqldelete = "DELETE FROM episodetv_info WHERE ID='$deletSerEp'";

    //give success message
    if ($conn->query($sqldelete) === TRUE) {

        echo '
       <div class="overlay overlay-edit">
         <div class="popup">
           <a class="close" href="seriespupload.php">&times;</a>
           <div class="content">
             <h2>Success</h2>
             <p>Item deleted.</p>
           </div>
         </div>
       </div>
     ';
    }
}
?>