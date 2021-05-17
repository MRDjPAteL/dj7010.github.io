<?php require_once "header.php"?>

<!DOCTYPE html>
<html>
<head>
<title>pr6_1</title>
<style type="text/css">
form {
 border: 3px solid #f1f1f1;
}
input[type=text], input[type=password]{
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}
/* Set a style for all buttons */
button {
 background-color: orange;
 color: white;
 padding: 14px 20px;
 margin: 8px 180px;
 border: none;
 cursor: pointer;
 width: 50%;
}
/* Add a hover effect for buttons */
button:hover {
 opacity: 0.8;
}
/* Extra style for the cancel button (red) */
.cancelbtn {
 width: auto;
 padding: 10px 18px;
 background-color: green;
}
/* Add padding to containers */
.container {
 padding: 100px;
 margin: 50px 250px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
 span.psw {
 display: block;
 float: none;
 }
 .cancelbtn {
 width: 100%;
 }
}
</style>
</head>
<body>
<form name="myform" action="pr6_1.php" method="POST">
 <div class="container">
 <h1 align="center">Login Form</h1>
 <label for="uname"><b>Username</b></label>
 <input type="text" name="uname" id="uname" placeholder="Username" required="">
 <label for="psw"><b>Password</b></label>
 <input type="password" name="psw" id="psw" placeholder="Password" required="">
 <button type="submit">Login</button> 
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
$uname = $_POST["uname"]; 
$pass = $_POST["psw"];
 $loginpass = "7010";
 $loginname = "devik";
 if($pass == $loginpass && $uname == $loginname) 
 { 
 echo '<center><h1>Login succesfully</h1></center>'; 
 } 
 else 
 { 
 echo '<center><h1>Invalid username or password</h1></center>'; 
 } 
}
?>
</body> 
</html>	

<?php require_once "footer.php"?>