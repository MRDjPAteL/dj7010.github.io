
<?php 
 session_start();
 if(isset($_SESSION['sid']))
 {
 echo "welcome to you<br>";
 echo "<a href='logoutusingsession.php'>Logout</a>";
 }
 else
 {
 header('Location: loginusingsession.php');
 }
?>