<?php
session_start();
function OpenCon()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wp";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);

if(isset($_POST["uname"], $_POST["pwd"])) 
    {     

        $uname = $_POST["uname"]; 
        $pwd = $_POST["pwd"]; 

        $result1 = mysql_query("SELECT uname, pwd FROM user WHERE uname = '".$uname."' AND  pwd = '".$pwd."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["unaam"] = $uname; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
}
?>