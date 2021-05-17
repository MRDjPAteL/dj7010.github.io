<?php require_once "header.php";
?>
<?php
require_once 'config.php';
$selectSql = "SELECT * FROM `customer` WHERE `cm_nm`=`$name`";
$ans=mysqli_query($conn,$selectSql);
	// Set session variables
	
	
$conn->close();
?>


		
<?php require_once "footer.php";
?>

</body>
</html>