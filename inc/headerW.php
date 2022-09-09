<!-- NAV -->
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <a href="index" class="logo">
                <i class='bx bx-movie-play bx-tada main-color'></i>Otc<span class="main-color">k</span>u
            </a>
            <?php

            if ($_SESSION['user']->ROLE === "SUPER-ADMIN") {
                echo '<strong> Admin ' . $_SESSION['user']->UR_NAME . '</strong>';
                echo "<h3 class='rt'> return to <a href='../super-admin/index'>dashboard </a></h3>";
            }
            if ($_SESSION['user']->ROLE === "USER") {
                echo '<strong> Welcome ' . $_SESSION['user']->UR_NAME . '</strong>';
            }

            ?>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="Animes.php">Anime</a></li>
                <li><a href="animation.php">Disney</a></li>
                <li><a href="Series">Series</a></li>

                <li>
                    <a href="../user/index" class="btn btn-hover">
                        <span>Account</span>
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