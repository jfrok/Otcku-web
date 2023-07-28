<?php
//  $username = "ootcnttg_root";
//  $password = "JfrO20033";
//  $database = new PDO("mysql:host=localhost; dbname=ootcnttg_otckum;",$username, $password);

$sname = "";
$uname = "";
$password = "";

$db_name = "";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
    exit();
}
//Returns the visitor's IP
// function ip()
// {
//     global $empresa;
//     if ($_SERVER) {
//         if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) and $_SERVER["HTTP_X_FORWARDED_FOR"]) {
//             $ipv = $_SERVER["HTTP_X_FORWARDED_FOR"];
//             $localiza = $ipv;
//         } else if (isset($_SERVER["HTTP_CLIENT_IP"]) and $_SERVER["HTTP_CLIENT_IP"]) {
//             $ipv = $_SERVER["HTTP_CLIENT_IP"];
//             $localiza = $ipv;
//         } else {
//             $ipv = $_SERVER["REMOTE_ADDR"];
//             $localiza = $ipv;
//         }
//     } else {
//         if (getenv('HTTP_X_FORWARDED_FOR')) {
//             $ipv = getenv('HTTP_X_FORWARDED_FOR');
//             $localiza = $ipv;
//         } else if (getenv('HTTP_CLIENT_IP')) {
//             $ipv = getenv('HTTP_CLIENT_IP');
//             $localiza = $ipv;
//         } else {
//             $ipv = getenv('REMOTE_ADDR');
//             $localiza = $ipv;
//         }
//     }
//     $arrV = explode(",", $localiza);
//     $v = $arrV[0];
//     return substr(htmlspecialchars($v, ENT_QUOTES), 0, 15);
// }

// //Get IP Address
// $log_ip = ip();
