<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include 'auth.php'
?>


<!--<img src="" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">!-->


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
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");


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

.center {
    display: flex;
    justify-content: center;
    margin-top: 2%;
}

.input-box input {
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
    transition-property: background;
}

.contact-form .send-btn:hover {
    background: #0582E3;
}

.form__title {
    color: #fff;
}

.l-form {
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    color: white;

    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.form__input {
    background-color: darkred;

    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.section {
    position: absolute;
    left: 0px;
    top: 100px;
    right: 0px;
    float: right;
    width: 50%;
}

.av .pricing-box-content {
    font-size: 25px;
}

strong {
    color: black;
}

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

/* popup box for message start */

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: none;
}

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

.wname {
    display: flex;
    justify-content: center;
    margin-top: 20px;

}

.usermenu {
    display: flex;
    align-items: baseline;
    position: relative;
    top: 100px;
    margin: 40px;
    font-size: 20px;
    cursor: pointer;
}

.usermenu ul {
    list-style: none;
    display: flex;
    flex-direction: column;
}

.usermenu ul li {
    margin: 20px;
}

.avatar {
    display: flex;
    justify-content: center;
}

.avatar img {
    border-radius: 50%;
    height: 8rem;
    width: 8rem;
    flex-shrink: 0;
}

#warning {
    color: goldenrod;
}

@media screen and (max-width: 880px) {
    main {
        font-size: 7px;
    }

    .input-box input {
        font-size: 12px;
    }

    .formc-input input {
        padding: 15px;
        width: 50px;
    }

    .section {
        position: absolute;
        left: 0px;
        top: 70px;
        right: 0px;
        float: right;
        width: 50%;
    }

    .pricing-box-content {
        font-size: 15px;
    }

}
</style>

<body>


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
                    <li><a href="../inc/Animes">Animes</a></li>
                    <li><a href="../inc/animation">Disney</a></li>
                    <li><a href="../inc/Series">Series</a></li>
                    <!--  <li><a href="./db/mylist.php">My list</a></li>-->

                    <li>

                        <a href="../user/logout.php" class="btn btn-hover">
                            <span>SIGN OUT</span>
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
    <main>
        <h1 class='wname'> (<div id="warning">هاذه الصفحه تحت الصيانيه </div>
            )<?php echo " " . $_SESSION['user']->UR_NAME . " مرحبا" ?></h1>
        <div class="avatar">
            <?php if (isset($_GET['error'])) : ?>
            <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>
            <?php if (!empty($_SESSION['user']->AVATAR)) {
                echo '
	    <img src="../file/' . $_SESSION['user']->AVATAR . '">
	    </div>
        ';
            } else {
                echo '
       <h3 class="center show-modal">اضافة خلفية</h3></div>
           ';
            }
            if ($_SESSION['user']->ROLE === "SUPER-ADMIN") {
                echo '<h3 class="center"> Admin ' . $_SESSION['user']->UR_NAME . '</h3>';
                echo "<h3 class='center'> return to > <a href='../super-admin/index'> dashboard </a></h3>";
            }

            // if(isset($_POST['editN'])){
            //     echo'
            // 			<div class="overlay overlay-edit">
            // 				<div class="popup item2">
            // 					<a class="close" href="index">&times;</a>
            // 					<div class="content">
            //                     <div class="p-3 shadow"> NAME  </div>
            //                     <input class="form-control mb-1" type="text" name="name" value="'.$_SESSION['user']->NAME.'" required />

            // 					</div>
            // 				</div>
            // 			</div>
            // 		';
            // }
            ?>
            <div class="input-box">
                <div class="center">
                    <input type="email" name="email" class="text-box"
                        <?php echo 'value="' . $_SESSION['user']->EMAIL . '" '; ?>readonly>
                </div>
            </div>
            <div class="center">
                <div class="contact-form">
                    <h2>Your Info</h2>
                    <form class="contact-form" method="post">
                        <a href="./profile">
                            <h3 style="color: brown;" class="center">edit</h3>
                        </a><br>
                        <a href="../inc/list">
                            <h3 style="color: gold;" class="center">MyList</h3>
                        </a><br>
                        <h3>الاسم</h3>
                        <input type="text" name="name" class="text-box"
                            <?php echo 'value="' . $_SESSION['user']->UR_NAME . '" '; ?>readonly>
                        <br>
                        <h3>الاعمر</h3><br>
                        <input type="email" name="email" class="text-box"
                            <?php echo 'value="' . $_SESSION['user']->AGE . '" '; ?> readonly><br>
                        <h3>نوع الحساب</h3><br>
                        <input type="text" name="role" class="text-box"
                            <?php echo 'value="' . $_SESSION['user']->ROLE . '" '; ?> readonly><br>

                        <h3>تاريخ الانضمام</h3><br>
                        <input type="text" name="role" class="text-box"
                            <?php echo 'value="' . $_SESSION['user']->ACCOUNT_DATE . '" '; ?> readonly><br>
                    </form>
                </div>
            </div>
            <?php
            //     function ip()
            //         {
            //             global $empresa;
            //             if ($_SERVER) {
            //                 if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) and $_SERVER["HTTP_X_FORWARDED_FOR"]) {
            //                     $ipv = $_SERVER["HTTP_X_FORWARDED_FOR"];
            //                     $localiza = $ipv;
            //                 } else if (isset($_SERVER["HTTP_CLIENT_IP"]) and $_SERVER["HTTP_CLIENT_IP"]) {
            //                     $ipv = $_SERVER["HTTP_CLIENT_IP"];
            //                     $localiza = $ipv;
            //                 } else {
            //                     $ipv = $_SERVER["REMOTE_ADDR"];
            //                     $localiza = $ipv;
            //                 }
            //             } else {
            //                 if (getenv('HTTP_X_FORWARDED_FOR')) {
            //                     $ipv = getenv('HTTP_X_FORWARDED_FOR');
            //                     $localiza = $ipv;
            //                 } else if (getenv('HTTP_CLIENT_IP')) {
            //                     $ipv = getenv('HTTP_CLIENT_IP');
            //                     $localiza = $ipv;
            //                 } else {
            //                     $ipv = getenv('REMOTE_ADDR');
            //                     $localiza = $ipv;
            //                 }
            //             }
            //             $arrV = explode(",", $localiza);
            //             $v = $arrV[0];
            //             return substr(htmlspecialchars($v, ENT_QUOTES), 0, 15);
            //         }

            //         //Get IP Address
            //         $log_ip = ip();

            //   $email =  $_SESSION['user']->EMAIL;
            //     $URIP =  $_SESSION['user']->UR_IP;
            //     echo 'oldip'.  $URIP;

            //     echo 'cip'.  $log_ip;
            //     // echo '<h1>'. $show['UR_IP'] .'</h1>';

            //   if($log_ip != $_SESSION['user']->UR_IP){
            //                              require_once "../loginup/mail.php";
            //                     $mail->addAddress($email);
            //                     $mail->Subject = "Securty";
            //                     $mail->Body = '<h1>Hello '.$_SESSION['user']->UR_NAME.' </h1>'
            //                         . "<div> هناك شخص سجل دخو في حسابك عنطريق شبكا اخرا<div>" .
            //                         "<a href='https://ootcku.xyz/loginup/login'>check</a>";
            //                     $mail->setFrom("soppurtootcku@gmail.com", "OTCKU");
            //                     $mail->send();
            //                          }
            ?>
            <!-- <div class='usermenu'>
<ul>
<li class='show-modal'> Info</li>
 <li><a href="#">security</li></a>
 <li><a href="#">Send Sugg</li></a>
 <li><a href="../loginup/chanhge.php">Change Password</li></a>

</ul>
</div> -->

            <div class="modal hidden">
                <button class="close-modal">&times;</button>
                <div class="modal-font">
                    <h1></h1>
                    <p>
                        <!-- for image start-->
                        <?php

                        echo '
                   <div class="center"> 
                   
                   <form class="contact-form" method="POST" enctype="multipart/form-data">
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