<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$uname = $_POST["username"];
$pass = $_POST["password"];
$deeppass = "dj@7010"; 
if($pass == $deeppass)
{
echo '<center><h1>Login succesfully</h1></center>';
}
else 
{
echo '<center><h1>Invalid password</h1></center>';
}
}
?>