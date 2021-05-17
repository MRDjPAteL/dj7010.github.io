<?php require_once "header.php"?>

<!DOCTYPE html>
<?php
$cookie_name = "Name";
$cookie_name2 = "Email";
$name_value = "Devik Jagani";
$email_value = "190023107010@gmail.com";
setcookie($cookie_name, $name_value, time() + (86400 * 30), "/");
setcookie($cookie_name2, $email_value, time() + (86400 * 30), "/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
 echo "Cookie is not set!";
} else {
 echo "Cookie is set!<br>";
 echo "Name :- " . $_COOKIE[$cookie_name]."<br>";
 echo "Email :- " . $_COOKIE[$cookie_name2];
}
?>
</body>
</html>

<?php require_once "footer.php"?>