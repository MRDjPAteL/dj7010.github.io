<?php 
 session_start();
 $uid = $_POST['uid']; 
 $pw = $_POST['pw'];
 if($uid == 'dj' and $pw == '7010')
 { 
 $_SESSION['sid'] = $uid; # need to set user id instead of session_id()
 if (isset($_SESSION['sid'])) {
 header('Location: securepage.php');
 }
 else
 {
 echo "Error";
 }
 } 
?>