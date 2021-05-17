<?php
// start Session
session_start();
function OpenCon()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wp";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);
 
 return $conn;
}
function CloseCon($conn)
{
	$conn -> close();
}
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
$conn = OpenCon();
if ($conn){
	//echo "Connected Successfully";
}else{
	//CloseCon($conn);
}
?>