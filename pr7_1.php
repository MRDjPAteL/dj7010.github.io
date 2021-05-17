<?php require_once "header.php"?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$number=$_POST['num'];
function checkNum($number) {
 if($number>1) {
 throw new Exception("Value must be 1 or below");
 }
 return true;
}
try {
 checkNum(2);
 echo 'If you see this, the number is 1 or below';
}
catch(Exception $e) {
 echo 'Message: ' .$e->getMessage();
}
}
?>
<form action="pr7_1.php" method="POST">
number:<input type="number" name="num">
<input type="submit" name="submit">
</form>

<?php require_once "footer.php"?>