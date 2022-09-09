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
    <link rel="shortcut icon" href="../images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <script data-ad-client="ca-pub-1066661145328868" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="../css/grid.css">
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

@media screen and (max-width: 480px) {
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
}
</style>

<!-- NAV -->
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <a href="../index" class="logo">
                <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
            </a>
            <!-- SEARCH FORM -->
            <form method="GET">
                <input type="text" name="search" placeholder=" Search on ...." autocomplete="OFF" />
                <input type="submit" name="searchBtn" value="Search">
            </form>
            <!-- SEARCH FORM END -->
            <ul class="nav-menu" id="nav-menu">
                <li><a href="../index">Home</a></li>
                <li><a href="../movies">Movies</a></li>
                <li><a href="../animation">Disney</a></li>
                <li><a href="../series">Series</a></li>

                <li>
                    <a href="../loginup/login" class="btn btn-hover">
                        <span>Sign in</span>
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