<?php
include 'auth.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="images/oot.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <script>
    // $(document).ready(function() {
    //     var commentCount = 2;
    //     $("#show").click(function() {

    //         $("#load-data").load("users-ajax.php");
    //     });

    // });
    </script>
</head>
<style>
.center {
    display: flex;
    justify-content: center;
    margin-top: 2%;
}

.avatar img {
    border-radius: 50%;
    height: 8rem;
    width: 8rem;
    flex-shrink: 0;
}

.contact-section {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-form .text-box {
    width: 100%;
}

.contact-info {
    color: #fff;
    max-width: 500px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;
}

.contact-info i {
    margin-right: 20px;
    font-size: 25px;
}

.contact-form {
    max-width: 700px;
    margin-right: 50px;
}

.contact-info,
.contact-form {
    flex: 1;
}

.contact-form h2 {
    color: #fff;
    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    margin-bottom: 30px;
}

.contact-form .text-box {
    background: #000;
    color: #fff;
    border: none;
    width: calc(50% - 10px);
    height: 50px;
    padding: 12px;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .text-box:first-child {
    margin-right: 15px;
}

.contact-form input {
    background: #000;
    color: #fff;
    border: none;
    width: calc(50% - 10px);
    height: 50px;
    padding: 12px;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
    text-align: center;
}

.contact-form .send-btn {
    float: right;
    background: #2E94E3;
    color: #fff;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

/* popup box for message start */


.popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: none;
}

.popup .close {
    position: absolute;
    top: 5px;
    right: 20px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.popup .close:hover {
    color: #ffd335;
}

a.return-login {
    text-decoration: underline;
}

a.return-login:hover {
    color: #ffd335;
}

/* popup box for message end */

.show-modal {
    cursor: pointer;
}

.close-modal {
    position: absolute;
    top: 1.2rem;
    right: 2rem;
    font-size: 5rem;
    color: red;
    cursor: pointer;
    border: none;
    background: none;
}

/* -------------------------- */
/* CLASSES TO MAKE MODAL WORK */
.hidden {
    display: none;
}

.modal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;

    background-color: white;
    padding: 6rem;
    border-radius: 5px;
    box-shadow: 0 3rem 5rem rgba(0, 0, 0, 0.3);
    z-index: 10;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(3px);
    z-index: 5;
}

/* mdal javas end */
@media screen and (max-width: 1950px) {
    .contact-section {
        flex-direction: column;
    }

    .contact-info,
    .contact-form {
        margin: 30px 50px;
    }

    .contact-form h2 {
        font-size: 30px;
    }

    .contact-form .text-box {
        width: 100%;
    }
}
</style>

<body>

    <?php

    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']->ROLE === "USER" || $_SESSION['user']->ROLE === "SUPER-ADMIN") {

            echo ' <div class="avatar center">';
            if (isset($_GET['error'])) :
                echo ' <p> ' . $_GET['error'] . ' </p>';
            endif;

            if (!empty($_SESSION['user']->AVATAR)) {
                echo '
         <a href="./index">
         <img src="../file/' . $_SESSION['user']->AVATAR . '"></a>
         </div>';
                echo '
         <h4 class="center show-modal">تعديل</h4></div>
             ';
            } else {
                echo '
        <h3 class="center show-modal">اضافة خلفية</h3></div>
            ';
            }
            if ($_SESSION['user']->ROLE === "SUPER-ADMIN") {
                echo '<strong class="center"> Admin ' . $_SESSION['user']->UR_NAME . '</strong>';
                echo "<h3 class='center'> return to > <a href='../super-admin/index'> dashboard </a></h3>";
            }
            echo '
<div  class="center" id="load-data">
<form class="contact-form" method="POST">
<h2>Edit Your Info</h2>
<h3>EMAIL</h3>
<input class="text-box" type="text" name="name" value="' . $_SESSION['user']->UR_NAME . '" required />
<h3>AGE</h3> 
<input  class="text-box" type="date" name="age" value="' . $_SESSION['user']->AGE . '" required />

<input class="text-box" type="hidden" name="password" value="' . $_SESSION['user']->PASSWORD . '" required />

<button class="send-btn" type="submit" name="update" id="show" value="' . $_SESSION['user']->ID . '">Apply</butoon>

</form>
</div>
</div>';

            if (isset($_POST['update'])) {
                require_once "../connectToDatabase.php";

                $updateUserData = $database->prepare("UPDATE users SET UR_NAME 
    = :name , AGE=:age WHERE ID = :id ");
                $updateUserData->bindParam('name', $_POST['name']);
                $updateUserData->bindParam('age', $_POST['age']);
                $updateUserData->bindParam('id', $_POST['update']);

                if ($updateUserData->execute()) {
                    echo '
        <div class="overlay">
            <div class="popup">
                <a class="close" href="profile">&times;</a>
                <div class="content">
                    <h2 style="color: black;">Success</h2>
                    <p style="color: black;">تم تحديث البيانات بنجاح</p>
                </div>
            </div>
        </div>
    ';
                    $user =  $database->prepare("SELECT * FROM users WHERE ID = :id ");
                    $user->bindParam('id', $_POST['update']);
                    $user->execute();
                    $_SESSION['user'] = $user->fetchObject();
                    header("refresh:1;");
                } else {
                    echo '<div class="alert alert-alert mt-3">  فشل تحديث البيانات </div>';
                }
            }
        } else {
            session_unset();
            session_destroy();
            header("location:../loginup/login", true);
        }
    } else {
        session_unset();
        session_destroy();
        header("location:../loginup/login", true);
    }

    ?>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="../inc/index" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
                </a>

                <ul class="nav-menu" id="nav-menu">
                    <li><a href="../inc/index">Home</a></li>

                    <li><a href="../inc/movies">Movies</a></li>
                    <li><a href="../Anime">Animes</a></li>
                    <li><a href="../inc/animation">Disney</a></li>
                    <li><a href="../inc/Series">Series</a></li>
                    <!--  <li><a href="./db/mylist.php">My list</a></li>-->

                    <li>

                        <a href="index" class="btn btn-hover">
                            <span>ACCOUNT</span>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal hidden">
        <button class="close-modal">&times;</button>
        <div class="modal-font">
            <h1></h1>
            <p>
                <!-- for image start-->
                <?php
                echo '
<div class="center"> 

<form class="contact-form"  method="POST" enctype="multipart/form-data">
<div class="formc-input">
<input class="text-box" type="file" name="my_image"></div>
 <input class="send-btn" type="submit" name="submit" value="Upload">
     </form>
     </div>
     ';
                include 'upload-script.php';

                ?>
            </p>
        </div>
    </div>
    <div class="overlay hidden"></div>
    <!-- for image end -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->

    <script src="../js/app.js"></script>
    <script src="../js/hidden.js"></script>
</body>

</html>