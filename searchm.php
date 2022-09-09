<?php

if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
    if ($_GET['search'] != "") {
        $searchValue =  $_GET['search'];
        header('location:./db/search.php?search=' . $searchValue . '&searchBtn=', true);
        echo  "<tr>";
    }
}