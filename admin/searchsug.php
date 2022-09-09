<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Users</title>
 
    
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
</style>
<?php 
session_start();
require_once '../connectToDatabase.php';
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "ADMIN"){
  
        echo '<form class="searchu">
        <main class="container " style="text-align: right; direction: rtl; max-width:760px;  margin:auto;" >
        <input class="form-control" type="text" name="search" placeholder="بحث عن ...." />
        <button class="btn btn-danger w-100 mt-3" type="submit" name="searchBtn" >بحث</button>
        </form>
        ';

if(isset($_GET['searchBtn'])){
    
    
    $searchResult = $database->prepare("SELECT * FROM sugg WHERE series LIKE :series OR movie LIKE :movie");
    $searchValue = "%" . $_GET['search'] . "%";
    $searchResult->bindParam("series",$searchValue);
    $searchResult->bindParam("movie",$searchValue);
    $searchResult->execute();
    echo '<table>';
    echo  "<tr>";
    echo "<th> الاداري</th>";
    echo "<th> الفليم</th>";
    echo "<th> المسلسل</th>";
    echo "<th> الانمي</th>";
    echo "<th> حذف</th>";
    echo "<th> تعديل</th>";
    echo  "<tr>";
    foreach($searchResult AS $result){
        echo  "<tr>";
        echo "<td> ".$result['manger'] ."</td>";
        echo "<td> ".$result['movie'] ."</td>";
        echo "<td> ".$result['series'] ."</td>";
        echo "<td> ".$result['anime'] ."</td>";
        echo '<td><form>
        <button class="btn btn-outline-danger" type="submit" name="remove" value="'.$result['ID'].'">حذف</button>
            </form></td>';

        echo '<td><form>
            <button class="btn btn-dark" type="submit" name="edit" value="'.$result['ID'].'">تعديل</button>
        </form></td>';

        echo  "<tr>";
    }
    echo '</table>';
} 


if(isset($_GET['remove'])){
 $removeItems =  $database->prepare("DELETE FROM todolist WHERE ID = :id");
 $removeItems->bindParam("id",$_GET['remove']);
 $removeItems->execute();

$removeUser = $database->prepare("DELETE FROM sugg WHERE ID = :id");
$removeUser->bindParam("id",$_GET['remove']);
if($removeUser->execute()){
echo '<div class="alert alert-success mt-3" > تم حذف مستخدم بنجاح </div>';
header("refresh:1; url=searchsug.php");
}

}

if(isset($_GET['edit'])){
session_start();
$_SESSION['userId'] = $_GET['edit'];
header("location:editUsersug.php?search=&searchBtn=");
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
</main>
</body>
</html>
