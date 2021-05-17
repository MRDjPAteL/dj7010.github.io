<?php require_once "header.php"?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Devik";
echo "Session variables are set.";
?>
<p>session started and session variables are set</p>
<?php
echo "My name is " . $_SESSION["name"] . ".<br>";
?>
<p>Session variables are retrieved</p>
<?php
$_SESSION["name"] = "Dj";
print_r($_SESSION);
?>
<p>Session variables are modified</p>
<?php
session_unset();
?>
<p>Session variables are deleted</p>
<?php
session_destroy();
?>
<p>Session variables are destroyed</p>
</body>
</html>

<?php require_once "footer.php"?>