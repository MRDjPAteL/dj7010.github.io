<?php require_once "header.php"?>
<?php
if(isset($_POST["uname"], $_POST["pwd"])) 
    {     

        $uname = $_POST["uname"]; 
        $pwd = $_POST["pwd"]; 

        $result1 = mysql_query("SELECT uname, pwd FROM User WHERE uname = '".$uname."' AND  pwd = '".$pwd."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $uname; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>

<?php require_once "header.php"?>