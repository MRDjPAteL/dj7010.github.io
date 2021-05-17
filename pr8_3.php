<?php require_once "header.php"?>

<!DOCTYPE html>
<html>
 <head>
 <title>Login Form</title>
 </head>
 <body>
 <h2>Login Form</h2>
 <form method="POST" action="checklogin.php">
 USER ID: <input type="text" name="uid"/><br>
 PASSWORD: <input type="password" name="pw"/><br>
 <input type="submit" value="Login"/>
 </form>
 </body>
</html>

<?php require_once "footer.php"?>