<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
//include 'auth.php';
// echo '
//                    <div class="center"> 

//                    <form class="contact-form"  method="POST" enctype="multipart/form-data">
//                    <div class="formc-input">
//                    <input class="text-box" type="file" name="my_image"></div>
//                     <input class="send-btn" type="submit" name="submit" value="Upload">
//                         </form>
//                         </div>
//                         ';
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "db_conn.php";


    echo "<pre>";
    echo  print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../file/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $my_image = $_POST['my_image'];

                // Insert into Database
                $sql = "UPDATE users SET AVATAR='$new_img_name' WHERE ID= '" . $_SESSION['user']->ID . "'";
                if (mysqli_query($conn, $sql) === true) {
                    //   header("Location:index.php");
                    $em = "تم اضافة الصوره رجا اعد تسجيل الدخول";
                    // header("Location:index.php?error=$em");
                    echo "<script language='javascript'>";
                    //echo 'alert("Your alert msg");';
                    echo 'window.location.replace("index.php?error=' . $em . '");';
                    echo "</script>";
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
} else {
    // header("Location:index.php");
    // echo "<script language='javascript'>";
    // //echo 'alert("Your alert msg");';
    // echo 'window.location.replace("index.php");';
    // echo "</script>";
}

// if(isset($_POST['submit'])){
//     $file = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp_name'];
//     $fileSize = $_FILES['file']['size'];
//     $fileError = $_FILES['file']['error'];
//     $filetype = $_FILES['file']['type'];


//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array('jpg', 'jpeg', 'png', 'pdf');

//     if(in_array($fileActualExt, $allowed)){
//         if($fileError === 0){
//             if($fileSize < 1000000){
//                 $fileNameNew = uniqid('', true).".".$fileActualExt;
//                 $fileDestination = '../file'.$fileNameNew;
//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 header("location: index.php?uploadsuccses");
//             }else{
//                 echo'You file is to big!';
//             }
//         }
//     }else{
//         echo'There was an error uploading your file!';

//     }
// }else{
//         echo'You cant upload files of this type!';
//     }
?>