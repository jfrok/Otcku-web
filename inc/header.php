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
    <script src="https://kit.fontawesome.com/e247e2a2ea.js" crossorigin="anonymous"></script>
    <!-- BOX ICONS -->
    <link rel="shortcut icon" href="../images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->

    <link t rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<style>
*::-webkit-scrollbar {
    width: 6px;
}

*::-webkit-scrollbar-thumb {
    background-color: #8a041b;
}

*::-webkit-scrollbar-track {
    background: #333333;
}

/*add style*/

.movie-info form button {
    background: none;
    border: none;

}

.movie-info i {
    font-size: 1.3rem;
    cursor: pointer;
}

input {
    display: inline-block;
    box-sizing: border-box;
    transition: .5s;
}

input[type="text"] {
    background: #fff;
    border: none;
    height: 20px;
    outline: none;
    padding: 0 25px;
    border-radius: 25px 0 0 25px;
}

input[type="submit"] {
    border-radius: 0 25px 25px 0;
    height: 20px;
    width: 80px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    font-size: 12px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    background: #951414;
}

ul li strong {
    display: none;
}

.aname {
    color: red;
    text-transform: uppercase;

}

.mimge {
    width: 290px;
    left: 0;
    top: 0;
    position: relative;
}

.mimges {

    position: relative;
}

.contanier {
    left: 20%;
    right: 10%;
    position: relative;
}

.movie-item-title {
    font-size: 15PX;
}

.rt {
    position: relative;
    left: 0px;


}

/* .filters button{

} */
.filter-options {
    flex: 0 0 auto;
    padding: 10px 20px;
    border-radius: 50px;
    background-color: var(--body-bg);
    border: 1px solid red;
    text-transform: capitalize;
    color: white;
    font-size: 15px;
    cursor: pointer;
}

.filter-options:hover {
    background-color: var(--main-color);
}

@media screen and (max-width: 680px) {
    .hidden {
        display: none;
    }

    .filter-options {
        padding: 5px 10px;
        border-radius: 50px;
        font-size: 9px;
    }

    .mimge {
        width: 167px;
        left: 0;
        margin: 10px;
        top: 0;

        position: relative;
    }

    .movie-item-title {
        font-size: 10PX;
    }
}


@media screen and (max-width: 1280px) {
    .hidden {
        display: none;
    }

    input {
        display: inline-block;
        box-sizing: border-box;
        transition: .5s;
    }

    input[type="text"] {
        background: #fff;
        border: none;
        width: 120px;
        height: 20px;
        outline: none;
        padding: 0 25px;
        border-radius: 25px 0 0 25px;
    }

    input[type="submit"] {
        border-radius: 0 25px 25px 0;
        height: 20px;
        width: 50px;
        border: none;
        outline: none;
        cursor: pointer;
        background: #951414;
        color: #fff;
        font-size: 12px;
    }

    .rt {
        display: none;

    }

    strong {
        display: none;
    }

}
</style>

<body>
    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
                </a>

                <!-- SEARCH FORM -->
                <?php

                if ($_SESSION['user']->ROLE === "SUPER-ADMIN") {
                    echo '<strong> Admin ' . $_SESSION['user']->UR_NAME . '</strong>';
                    echo "<h3 class='rt'> return to <a href='../super-admin/index'>dashboard </a></h3>";
                }
                if ($_SESSION['user']->ROLE === "USER") {
                    echo '<strong> Welcome ' . $_SESSION['user']->UR_NAME . '</strong>';
                }
                ?>
                <form method="GET">
                    <input type="text" name="search" placeholder=" Search on ...." autocomplete="OFF" />
                    <input type="submit" name="searchBtn" value="Search">
                </form>
                <!-- SEARCH FORM END -->
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="index.php">Home</a></li>

                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="Animes">Anime</a></li>
                    <li><a href="animation.php">Disney</a></li>
                    <li><a href="Series.php">Series</a></li>
                    <!--<li><a href="list">Mylist</a></li>-->
                    <li>

                        <a href="../user/index" class="btn btn-hover">
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
    <!-- END NAV -->