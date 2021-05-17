<?php require_once "header.php"?>

<?php
 $time = date("H");
 $timezone = date("e");
 if ($time < "12") {
 echo "Good morning";
 } else
 if ($time >= "12" && $time < "17") {
 echo "Good afternoon";
 } else
 if ($time >= "17" && $time < "19") {
 echo "Good evening";
 } else
 if ($time >= "19") {
 echo "Good night";
 }
 ?>

 <?php require_once "footer.php"?>