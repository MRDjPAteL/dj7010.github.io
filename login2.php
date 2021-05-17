<?php
$uname = $_POST["username"];
$pass = $_POST["password"];
$database = array("devik"=>"dj@7010");
foreach($database as $un => $ps)
{
if($uname==$un)
{
if($pass==$database[$ps])
{
echo 'login successfully';
}
else
{
echo 'invalid password';
}
}
else
{
echo 'invalid username';
}
}

?>