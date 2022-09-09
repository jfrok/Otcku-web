<?php  
//  $username = "ootcnttg_root";
//  $password = "JfrO20033";
//  $database = new PDO("mysql:host=localhost; dbname=ootcnttg_otckum;",$username, $password);
 
$sname = "mysql.ootcku.xyz";
$uname = "jfroo";
$password = "JfrO20033";

$db_name = "ootcnttg_otckum";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
