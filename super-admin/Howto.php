
<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "SUPER-ADMIN"){
echo "";


}else{
    header("location:../loginup/login.php",true); 
    die("");
}
}else{
    header("location:../loginup/login.php",true); 
    die(""); 
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:../loginup/login.php",true); 
    }
?> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Movie</title>
 
    
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
	margin-top: 50px;
	padding: 30px;
}

</style>
<style>
#main-content{
    max-width: 800px;
    margin: 0 auto;
    padding: 100px 0 0;
}
.responsive{
    width: 100%;
    height: 900px;
    right: 0;
    padding-bottom: 56.25%;
    position: relative;
}
.responsive iframe{
    position: relative;
    width: 100%;
    height: 100%;
}
h2{
    top: 650px;
    position: absolute;
    right: 300px;
}
/*.story{
    top: 700px;
    position: absolute;
    color: #FFC100;
    left: 0;
    right: 0;
    
}*/
.textS{
    position: relative;
    top: 0;
    left: 0;
}
.date{
    top: 100px;
    position: absolute;
    color: #B22B2B;
}
.rate{
    top: 120px;
    margin: 7px;
    position: absolute;
    color: #FFA200;  
}
.HD{
    top: 155px;
    padding: 10px;
    margin: 7px;
    position: absolute;
    color: #46FF00;  
}
.rp{
    top: 830px;
    left: 310px;
    color: red;
    position: absolute;
}
.rd{
    top: 800px;
    left: 0px;
    right: 0px;
    color: gold;
    position: absolute;
}
ol{
	position: relative;
	top: 700px;
	right: 300px;
	font-size: 20px;
	float: right;
}
@media screen and (max-width: 680px){

#main-content{
max-width: 800px;
margin: 0 auto;
padding: 100px 0 0;
}
.responsive{
width: 100%;
height: 500px;
right: 0;
padding-bottom: 56.25%;
position: relative;
}
.responsive iframe{
position: relative;
width: 100%;
height: 100%;
}
.rp{
    top: 575px;
    left: 10px;
    color: red;
    position: absolute;
}
.rd{
    top: 490px;
    left: 0px;
    right: 0px;
    color: gold;
    position: absolute;
}
h2{
    top: 430px;
    position: absolute;
    right: 40px;
    
    font-size: 18px;
}
ol{
	position: relative;
	top: 460px;
	right: 0px;
	font-size: 16px;
	float: right;
}
}
</style>

<?php require 'dash.php'; ?>

    <h2> ملاحضا تاكد الرابط ما يحتوي علئ فراغات</h2>
	<ol>
    <li> (كلشي قابل للتطوير بطرق حترافيه)</li>
    <li>(Search M)  تاكد من  وجود الفيلم</li>
	 <li >  4shared و videourl تاكدر تحط الرابط الاول في   </li>
	 <li > اخر حقلين تحط روابط مختلفه (سيرفرات مختلفة)</li>
	 
	 </ol>
<div class='btns'>
           <div id='main-doc-body'>
           <div id='main-content'>
               <div class='responsive'>
               <iframe id='iframe' src="https://www.youtube.com/embed/Arl7wbK8HJI" frameborder='0' allowfullscreen=''></iframe>
<!-- import script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../js/index.js"></script>
	<!-- end import script -->
</body>
</html>
</form>