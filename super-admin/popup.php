<?php
//include 'auth.php';
if (isset($_POST['add-new'])) {
    //include '../db_conn.php';
    // include 'auth.php';
    //     //display item
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
    //}
    require_once '../connectToDatabase.php';
    $moviesName = $database->prepare("SELECT * FROM filters");
    $moviesName->execute();
    if ($moviesName->rowCount() > 0) {
        $rows  = $moviesName->fetchAll();
        $html = '<select name="cato" id="sid">';
        foreach ($rows as $row) {
            $html = $html . '<option value="' . $row['ID'] . '">' . $row['NAME'] . '</option>';
        };
        $html = $html . '</select>';
    }

    // $mark = '<select name="marked">';

    // $mark = $mark . '
    //   <option value="defulat">none</option>
    //   <option value="HOT">HOT</option>';

    // $mark = $mark . '</select>';
    echo '
    <div class="overlay overlay-edit">
      <div class="popup item">
        <a class="close" href="index.php">&times;</a>
        <div class="content">
          <h2>Add Movie</h2>
          <form   method="POST" enctype="multipart/form-data">
          <div class="grid-left">
          <select name="tabelname">
              <option value="movies_info">Movies</option>
              <option value="Disny">Disney</option>
              </select>
              </div>
         
            <div class="grid-full">
             
              <h4>Image url :</h4>
                     <input type="text" name="imageurl" reuqired>
     				  <input type="hidden" value="' . $_SESSION['user']->ID . '" name="publisherid" reuqired>
            </div>
            <div class="grid-left">
            <h4> Name :</h4>
            <input type="text" name="name" >
            </div>
            <div class="grid-right">
            <h4> Rate :</h4>
                <input type="text" name="rate" >
            </div>
            <div class="grid-right">
            <h4> Date :</h4>
                  <input type="text" name="date" >
                  </div>
            <div class="grid-left">
            <h4> Type :</h4>';
    echo $html;
    echo '
             
              </div>
              
              <div class="grid-full">
                      <h4> Video url :</h4>
                      <input type="text" name="videourl" ><br>
                      </div>
                      <div class="grid-left">      
                      <h4> Trailr :</h4>
                      <input type="text" name="trailr" >
                      <br>
                      </div>
                   
                    <br>
                    <div class="grid-full">
                      servers
                      <br>
                      <input type="text" name="server1" >
                      <input type="text" name="server2" >
                      <input type="text" name="server3" >
                    </div>
             
                            <div class="grid-left">
                                              <h4>Story :</h4>
                                              <textarea rows="5" cols="25" name="story" ></textarea>
                        
                                            </div>
                                            
                                            <div class="grid-full">
                                              <button type="submit" class="btn-submit save-item-page" name="add-new-item">
                                                Save
                                              </button>
                                
            </div>
          </form>
        </div>
      </div>
    </div>';
    //     echo '
    //          <div class="overlay overlay-edit">
    //   <div class="popup item">
    //   <a class="close" href="index.php">&times;</a>
    //   <div class="content">
    //     <h2>Edit News</h2>
    //     <form   method="POST" enctype="multipart/form-data">
    //       <div class="grid-full">
    //         <p class="upload-pic-title">Upload Image : </p>
    //         <input type="file" class="upload-file-pic" name="my_image" >
    // //                 <div class="grid-full">

    // //                   <h4>Image url :</h4>
    // //                   <input type="text" name="imageurl" reuqired>
    // // 				  <input type="hidden" value="' . $_SESSION['user']->ID . '" name="publisherid" reuqired>
    // //                 </div>
    // //                 <div class="grid-left">
    // //                   <h4> Name :</h4>
    // //                   <input type="text" name="name" >
    // //                 </div>
    // //                 <div class="grid-left">
    // //                   <h4> Rate :</h4>
    // //                   <input type="text" name="rate" >
    // //                 </div>
    // //                 <div class="grid-left">
    // //                   <h4> Date :</h4>
    // //                   <input type="text" name="date" >

    // // 				<div class="grid-full">
    // //                   <h4> Video url :</h4>
    // //                   <input type="text" name="videourl" >
    // //                   servers<br>
    // //                   <input type="text" name="server1" >
    // //                   <input type="text" name="server2" >
    // //                   <input type="text" name="server3" >
    // //                 </div>
    // //                 <div class="grid-right">
    // //                 <h4> Trailr :</h4>
    // //                 <input type="text" name="trailr" >
    // //               </div>
    // //                 <div class="grid-right">
    // //                   <h4>Category :</h4>';
    // //     echo $html;
    // //     echo '
    // // 				  </div>
    // // 				  <div class="grid-left">
    // //                   <h4>Story :</h4>
    // //                   <textarea rows="5" cols="42" name="story" ></textarea>

    // //                 </div>
    // //                 <br><br>
    // //                 <div class="grid-full">
    // //                   <button type="submit" class="btn-submit save-item-page" name="add-new-item">
    // //                     Save
    // //                   </button>
    //         </div>
    //         </form>
    //       </div>
    //     </div>
    //   </div>
    // //       ';
} //sudo chmod 777 -R /opt/lampp/htdocs/newsweb/files/

//check form submission to add new item 
$tabelname = isset($_POST['tabelname']) ? $_POST['tabelname'] : '';

if (isset($_POST['add-new-item'])) {
    //include '../db_conn.php';
    $tabelname = $_POST['tabelname'];

    $name = $_POST['name'];
    $date = $_POST['date'];
    $rate = $_POST['rate'];

    $trailr = $_POST['trailr'];

    $imageurl = $_POST['imageurl'];
    $videourl = $_POST['videourl'];

    $story = $_POST['story'];

    $server1 = $_POST['server1'];
    $server2 = $_POST['server2'];
    $server3 = $_POST['server3'];

    $cato = $_POST['cato'];

    $publisherid = $_POST['publisherid'];
    //$marked = $_POST['marked'];


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

    if ($publisherid != $_SESSION['user']->ID) {
        echo '
          	<div class="overlay overlay-edit">
          		<div class="popup item2">
          			<a class="close" href="index.php">&times;</a>
          			<div class="content">
          				<h2>U can,t Fucking edit that</h2>
          				<p>You can,t change that</p>
          			</div>
          		</div>
          	</div>';

        exit(" ");
    }
    if (empty($name)) {
        echo '
				<div class="overlay overlay-edit">
					<div class="popup item2">
						<a class="close" href="index.php">&times;</a>
						<div class="content">
							<h2>Failed</h2>
							<p>The title is empty</p>
						</div>
					</div>
				</div>';

        exit(" ");
    }
    if (empty($imageurl)) {
        echo '
          	<div class="overlay overlay-edit">
          		<div class="popup item2">
          			<a class="close" href="index.php">&times;</a>
          			<div class="content">
          				<h2>Failed</h2>
          				<p>there no image</p>
          			</div>
          		</div>
          	</div>';

        exit(" ");
    }
    if (empty($date)) {
        echo '
				<div class="overlay overlay-edit">
					<div class="popup item2">
						<a class="close" href="index.php">&times;</a>
						<div class="content">
							<h2>Failed</h2>
							<p>there is no description</p>
						</div>
					</div>
				</div>';

        exit(" ");
    }
    //insert new item into database
    $insertSql = "INSERT INTO $tabelname(NAME,DATE,RATE,STORY,IMAGEURL,TRAILR,VIDEOURL,FORSHARED,DOODSTREAM,UQLOAD,DWM,SID,USER_ID)VALUES ('$name','$date','$rate','$story','$imageurl','$trailr','$videourl','$server1','$server2','$server3','LINK','$cato','$publisherid')";
    // echo "<pre>";
    // print_r($sql3);
    // echo "</pre>";

    //give success message
    if ($conn->query($insertSql)) {

        echo '
						<div class="overlay overlay-edit">
							<div class="popup item2">
								<a class="close" href="index.php">&times;</a>
								<div class="content">
									<h2>Success</h2>
									<p>New Item Added.</p>
								</div>
							</div>
						</div>
					';
    }
}
include '../connectToDatabase.php';
$name = isset($_POST['name']) ? $_POST['name'] : '';

$imageurl = isset($_POST['imageurl']) ? $_POST['imageurl'] : '';
$videourl = isset($_POST['videourl']) ? $_POST['videourl'] : '';
$sonename = isset($_POST['sonename']) ? $_POST['sonename'] : '';
$stoname = isset($_POST['stoname']) ? $_POST['stoname'] : '';
$sthreename = isset($_POST['sthreename']) ? $_POST['sthreename'] : '';
$sfourname = isset($_POST['sfourname']) ? $_POST['sfourname'] : '';
$sfivename = isset($_POST['sfivename']) ? $_POST['sfivename'] : '';
$ssixname = isset($_POST['ssixname']) ? $_POST['ssixname'] : '';
$doodstream = isset($_POST['doodstream']) ? $_POST['doodstream'] : '';
$forshared = isset($_POST['forshared']) ? $_POST['forshared'] : '';
$uqload = isset($_POST['uqload']) ? $_POST['uqload'] : '';
$sid = isset($_POST['sid']) ? $_POST['sid'] : '';
$mpupload = isset($_POST['mpupload']) ? $_POST['mpupload'] : '';
$mpuploadan = isset($_POST['mpuploadan']) ? $_POST['mpuploadan'] : '';
$solidfiles = isset($_POST['solidfiles']) ? $_POST['solidfiles'] : '';



if (isset($_POST['upload'])) {
    if (empty($name)) {
        echo '<div class="alert alert-danger" role="alert">
       عفوا الاسم فاضي 
      </div>';

        exit(" ");
    }
    if (empty($imageurl)) {
        echo '<div class="alert alert-danger" role="alert">
     عفوا لاتوجد صوره 
    </div>';

        exit(" ");
    }



    if (empty($videourl)) {
        echo '<div class="alert alert-danger" role="alert">
   عفوا لايوجد رابط للحلقة 
  </div>';

        exit(" ");
    }
    if (empty($doodstream)) {
        echo '<div class="alert alert-danger" role="alert">
   ملاحضة يجب تعبية حقول السيرفرات جميعا
  </div>';

        exit(" ");
    }
    if (empty($forshared)) {
        echo '<div class="alert alert-danger" role="alert">
   ملاحضة يجب تعبية حقول السيرفرات جميعا
  </div>';

        exit(" ");
    }
    if (empty($uqload)) {
        echo '<div class="alert alert-danger" role="alert">
   ملاحضة يجب تعبية حقول السيرفرات 
  </div>';

        exit(" ");
    }
}
if (isset($_POST['upload'])) {
    $checkVedioUrl = $database->prepare("SELECT * FROM episode_info WHERE VIDEOURL = :VIDEOURL");
    $videourl = $_POST['videourl'];
    $checkVedioUrl->bindParam("VIDEOURL", $videourl);
    if ($checkVedioUrl->rowCount() > 0) {
        echo '<div class=alert alert-danger" role="alert">
        هذا الرابط سابقا مستخدم
      </div>';
    } else {

        $addItem = $database->prepare("INSERT INTO episode_info(NAME,VIDEOURL,IMAGEURL,DOODSTREAM,FORSHARED,UQLOAD,MPUPLOAD,MPUPLOADAN,SOLIDFILES,SONENAME,STONAME,STHREENAME,SFOURNAME,SFIVENAME,SSIXNAME,SID,USER_ID) VALUES(:name,:videourl,:imageurl,:doodstream,:forshared,:uqload,:mpupload,:mpuploadan,:solidfiles,:sonename,:stoname,:sthreename,:sfourname,:sfivename,:ssixname,:sid," . $_SESSION['user']->ID . ")");
        $addItem->bindParam("name", $name);

        $addItem->bindParam("videourl", $videourl);
        $addItem->bindParam("imageurl", $imageurl);

        $addItem->bindParam("doodstream", $doodstream);
        $addItem->bindParam("forshared", $forshared);
        $addItem->bindParam("uqload", $uqload);
        $addItem->bindParam("mpupload", $mpupload);
        $addItem->bindParam("mpuploadan", $mpuploadan);
        $addItem->bindParam("solidfiles", $solidfiles);

        $addItem->bindParam("sonename", $sonename);
        $addItem->bindParam("stoname", $stoname);
        $addItem->bindParam("sthreename", $sthreename);
        $addItem->bindParam("sfourname", $sfourname);
        $addItem->bindParam("sfivename", $sfivename);
        $addItem->bindParam("ssixname", $ssixname);

        $addItem->bindParam("sid", $sid);
        //$addItem->bindParam("USER_ID", "");

        if ($addItem->execute()) {
            echo '
						<div class="overlay overlay-edit">
							<div class="popup item2">
								<a class="close" href="animeepupload.php">&times;</a>
								<div class="content">
									<h2>Success</h2>
									<p>New Item Added.</p>
								</div>
							</div>
						</div>
					';
        } else {
            echo '
						<div class="overlay overlay-edit">
							<div class="popup item2">
								<a class="close" href="animeepupload.php">&times;</a>
								<div class="content">
									<h2>Failed</h2>
									<p>New Item Added.</p>
								</div>
							</div>
						</div>
					';
        }
    }
}
if (isset($_POST['upload-tv-ep'])) {
    $name = $_POST['name'];
    //$rate = $_POST['rate'];
    $imageurl = $_POST['imageurl'];
    $videourl = $_POST['videourl'];
    $doodstream = $_POST['doodstream'];
    $forshared = $_POST['forshared'];
    $uqload = $_POST['uqload'];
    $sid = $_POST['sid'];

    if (empty($name)) {
        echo '<div class="alert alert-danger" role="alert">
           عفوا الاسم فاضي 
          </div>';

        exit(" ");
    }
    if (empty($imageurl)) {
        echo '<div class="alert alert-danger" role="alert">
         عفوا لاتوجد صوره 
        </div>';

        exit(" ");
    }



    if (empty($videourl)) {
        echo '<div class="alert alert-danger" role="alert">
       عفوا لايوجد رابط للحلقة 
      </div>';

        exit(" ");
    }
    if (empty($doodstream)) {
        echo '<div class="alert alert-danger" role="alert">
       ملاحضة يجب تعبية حقول السيرفرات جميعا
      </div>';

        exit(" ");
    }
    if (empty($forshared)) {
        echo '<div class="alert alert-danger" role="alert">
       ملاحضة يجب تعبية حقول السيرفرات جميعا
      </div>';

        exit(" ");
    }
    if (empty($uqload)) {
        echo '<div class="alert alert-danger" role="alert">
       ملاحضة يجب تعبية حقول السيرفرات جميعا
      </div>';

        exit(" ");
    }
    $tvSql = "INSERT INTO episodetv_info(NAME,VIDEOURL,RATE,IMAGEURL,DOODSTREM,FORSHARED,UQLOAD,SID,EP_USER_ID) VALUES('$name','$videourl','none','$imageurl','$doodstream','$forshared','$uqload','$sid'," . $_SESSION['user']->ID . ")";


    if ($epTv = $conn->query($tvSql)) {
        echo '
<div class="overlay overlay-edit">
<div class="popup item2">
    <a class="close" href="seriespupload.php">&times;</a>
    <div class="content">
        <h2>Success</h2>
        <p>New Item Added.</p>
    </div>
</div>
</div>
';
    } else {
        echo '
<div class="overlay overlay-edit">
<div class="popup item2">
    <a class="close" href="seriespupload.php">&times;</a>
    <div class="content">
        <h2>Failed</h2>
        <p>New Item Added.</p>
    </div>
</div>
</div>
';
    }
}