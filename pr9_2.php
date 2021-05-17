<!DOCTYPE html>
<html>
<head>
<title>pr9_2</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
/* Attempt to connect to MySQL database */
try{
 $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
 die("ERROR: Could not connect. " . $e->getMessage());
}
 $name=$_POST['name'];
 
 // Attempt select query execution
 $sql = "SELECT * FROM user where uname='$name';";
 if($result = $pdo->query($sql)){
 if($result->rowCount() > 0){
 echo "Username is present";
 }
 else{
 echo "username is not present";
 }
 }}
 ?>
<form action="pr9_2.php" method="post">
Username:<input type="text" name="name">
<input type="submit" name="submit">
</form>
</body>
</html>