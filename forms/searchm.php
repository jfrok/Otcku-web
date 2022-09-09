<?php





if (isset($_GET['searchBtn']) and isset($_GET['search'])) {
  if ($_GET['search'] != "") {
    $searchValue =  $_GET['search'];
    header('location:../inc/search.php?search=' . $searchValue . '&searchBtn=', true);
    echo  "<tr>";
  }
}

// if (isset($_GET['searchBtn']) and isset($_GET['search'])) {

//     //redirect to search result page if form submitted
//    if(!empty($_POST["search"])) {

//        $query = str_replace(" ", "+", $_POST["search"]);
//      header("location:../inc/search.php?search=" . $query. '&searchBtn=', true);
     
//  }
// }

?>