<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search For Movies</title>
 
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="../images/oot.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="../css/styled.css">
	
	 <!-- BOX ICONS -->
	 <link rel="shortcut icon" href="images/oot.PNG" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>

.searchu{
	margin-top: 60px;
	padding: 40px;
}
/* .hidden{
    display: none;
}
.dark {
  background-color: black;
}
.light {
  background-color: white;
} */

</style>

   
<?php 
session_start();
require_once '../connectToDatabase.php';
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "SUPER-ADMIN"){
    require 'dash.php';
echo '<form class="searchu">
<main class="container " style="text-align: right; direction: rtl; max-width:760px;  margin:auto;" >
<input class="form-control" type="text" name="search" placeholder="بحث عن ...." />
<button class="btn btn-danger w-100 mt-3" type="submit" name="searchBtn" >بحث</button>
</form>

';

if(isset($_GET['searchBtn'])){
 
    
    $searchResult = $database->prepare("SELECT * FROM movies_info WHERE NAME LIKE :name ");
    $searchValue = "%" . $_GET['search'] . "%";
    $searchResult->bindParam("name",$searchValue);
   
    $searchResult->execute();
    echo '<table>';
    
    echo "<th> الأسم</th>";
   
   
    echo  "<tr>";
    foreach($searchResult AS $result){
        echo  "<tr>";
        echo "<td> ".$result['NAME'] ."</td>";
       
     
        echo  "<tr>";
    }
    echo '</table>';
   echo'</main';
}


}else{
    session_unset();
    session_destroy();
    header("location:../loginup/login.php",true);  
}
}else{
    session_unset();
    session_destroy();
    header("location:../loginup/login.php",true);  
}

?>

<!-- import script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../js/index.js"></script>
	<!-- end import script -->
    <script>
//         const moon = document.querySelector(".fa-moon");
// const sun = document.querySelector(".fa-sun");
// const body = document.getElementsByTagName("body")[0];

// sun.classList.add("hidden");

// function darkTheme() {
//   body.classList.add("dark");
//  // body.classList.remove("light");
//   moon.classList.add("hidden");
//   sun.classList.remove("hidden");
//   sun.style.color = "white";
//   body.style.color = "white";
// }
// function lightTheme() {
//   body.classList.remove("dark");
//   body.style.fontColor = "white";
//   //body.classList.add("light");
//   sun.classList.add("hidden");
//   moon.classList.remove("hidden");
//   body.style.color = "black";
// }

// moon.addEventListener("click", function () {
//   darkTheme();
// });
// sun.addEventListener("click", function () {
//   lightTheme();
// });
document.getElementsByTagName('tbody')[0]

    </script>
</main>
</body>
</html>

