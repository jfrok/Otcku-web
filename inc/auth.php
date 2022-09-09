<?php
session_start();


if (isset($_SESSION['user'])) {
  if ($_SESSION['user']->ROLE === "USER" || $_SESSION['user']->ROLE === "ADMIN" || $_SESSION['user']->ROLE === "SUPER-ADMIN") {
      
    
}else{
  header("location:../loginup/login.php", true);
}
}else{
  header("location:../loginup/login.php", true);
}
if (isset($_GET['logout'])) {

// Initialize the session
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location:../loginup/login.php", true);
exit;

}
?>